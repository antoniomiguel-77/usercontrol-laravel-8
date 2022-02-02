<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'first_name'=>'bail|required',
            'second_name'=>'bail|required',
            'sexo'=>'bail|required',
            'birth'=>'bail|nullable',
            'tel'=>'bail|required',
            'email'=>'bail|required|unique:contacts,email',
            'city'=>'bail|required',
            'street'=>'bail|required',
            

        ];
    }
}
