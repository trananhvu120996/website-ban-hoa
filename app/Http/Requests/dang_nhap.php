<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class dang_nhap extends Request
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

            //login
            "loginemail"=>"required",
            "loginpassword"=>"required",
            
        ];
    }

    public function messages(){
        return[

            "loginemail.required"=>"Vui lòng nhập Email",
            "loginpassword.required"=>"Vui lòng nhập password",

        ];
    }
}
