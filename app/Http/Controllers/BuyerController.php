<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBuyerRequest;
use App\Http\Requests\UpdateBuyerRequest;
use App\Models\Buyer;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('buyer.index',['buyers'=>Buyer::orderBy('created_at','desc')
        ->paginate(5)]);
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
    public function store(StoreBuyerRequest $request)
    {
        Buyer::create($request->all());
        return redirect(route('buyers.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Buyer $buyer)
    {
        return view('buyer.show',compact('buyer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buyer $buyer)
    {
        return view('buyer.edit',compact('buyer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBuyerRequest $request, Buyer $buyer)
    {
        $buyer->code_name = $request->code_name;
        $buyer->name = $request->name;
        $buyer->address = $request->address;

        if($buyer->isDirty()){
            $buyer->save();
            return redirect(route('buyers.index'));
        }
        return redirect(route('buyers.edit',$buyer->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buyer $buyer)
    {
       $buyer->delete();
       return redirect(route('buyers.index'));
    }
}
