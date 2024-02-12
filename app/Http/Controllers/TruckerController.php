<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTruckerRequest;
use App\Http\Requests\UpdateTruckerRequest;
use App\Models\Trucker;

class TruckerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('trucker.index',[
            'truckers'=>Trucker::orderBy('created_at','desc')
                ->paginate(5)
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTruckerRequest $request)
    {
        Trucker::create($request->all());

        return redirect(route('truckers.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Trucker $trucker)
    {
        return view('trucker.show',compact('trucker'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trucker $trucker)
    {
        return view('trucker.edit',compact('trucker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTruckerRequest $request, Trucker $trucker)
    {

        $trucker->name = $request->name;
        $trucker->address = $request->address;

        if($trucker->isDirty()){
            $trucker->save();
            return redirect(route('truckers.show',$trucker->id));
        }

        return redirect(route('truckers.edit',$trucker->id));
//        $trucker->update($request->all(['name','address']));
//            return redirect(route('truckers.show',$trucker->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trucker $trucker)
    {
        $trucker->delete();
        return redirect(route('trucker.index'));
    }
}
