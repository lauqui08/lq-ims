<?php

namespace App\Http\Requests;

use App\Models\Buyer;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBuyerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $request_code_name = Buyer::where('code_name',$this->code_name)->get();
        if(count($request_code_name) !== 0){
            return [
                'code_name'=>['required','max:255','unique:buyers'],
                'name'=>['required','max:255'],
                'address'=>['required']
            ];
        }
        return [
            'code_name'=>['required','max:255'],
            'name'=>['required','max:255'],
            'address'=>['required']
        ];

    }
}
