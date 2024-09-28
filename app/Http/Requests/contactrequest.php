<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactrequest extends FormRequest
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
        return [
            'name'=>'required',
            'email'=>'required|email',
            'address'=>'required',
            'phone'=>'required|min:11',
        ];
    }
    public function attributes(){
        return [
            'name'=>' Contact Name',
            'email'=>' Contact Email',
            'address'=>' Contact Address',
            'phone'=>' Contact Phone',
        ];
    }
}
