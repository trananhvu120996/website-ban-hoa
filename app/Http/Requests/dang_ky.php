<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class dang_ky extends Request
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
            //
            "email" =>"required",
            "ten_hien_thi"=>"required",
            "password"=>"required|confirmed",
            "password_confirmation"=>"required",
            "gioi_tinh" =>"required",
            "dia_chi" =>"required",
            "sdt" =>"required",


            
        ];
    }

    public function messages(){
        return[

           "email.required"=>"Vui lòng nhập Email",
            "ten_hien_thi.required"=>"Vui lòng nhập tên hiển thị",
            "password.required"=>"Vui lòng nhập mật khẩu",
            "password_confirmation.required"=>"Vui lòng nhập lại mật khẩu",
            "password.confirmed"=>"Nhập lại mật khẩu không chính xác",
            "dia_chi.required"=>"Vui lòng nhập địa chỉ",
            "sdt.required"=>"Vui lòng nhập số điện thoại",
        ];
    }
}
