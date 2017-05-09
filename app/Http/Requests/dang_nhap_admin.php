<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class dang_nhap_admin extends Request
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
            "ten_dang_nhap"=>"required",
            "mat_khau"=>"required",
            
        ];
    }

    public function messages(){
        return[

            "ten_dang_nhap.required"=>"Vui lòng nhập tên đăng nhập",
            "mat_khau.required"=>"Vui lòng nhập mật khẩu",

        ];
    }
}
