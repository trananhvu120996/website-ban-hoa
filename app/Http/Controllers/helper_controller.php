<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class helper_controller extends Controller
{
    public function test_ke_thua($abc){
        return $abc . "(đã kế thừa)";
    }

    public function chuyen_mang_doi_tuong_sang_mang_2_chieu($mang_doi_tuong){
        $mang_tam = array();

        foreach($mang_doi_tuong as $phan_tu)
        {
            $mang_tam[] = array($phan_tu->ma => $phan_tu->ten);
        }

        return $mang_tam;
    }

    //loại bỏ dấu t.v
    function bo_dau ($str){

       $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd'=>'đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i'=>'í|ì|ỉ|ĩ|ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
			'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D'=>'Đ',
            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        
        foreach($unicode as $nonUnicode=>$uni){
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
        }
        $str = str_replace(array('[\', \']'), '', $str);
        $str = preg_replace('/\[.*\]/U', '', $str);
        $str = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $str);
        $str = htmlentities($str, ENT_COMPAT, 'utf-8');
        $str = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $str );
        $str = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', $str);
        return strtolower(trim($str, '-'));
    }


public function so_luong_gio_hang_khi_load_page()
    {
        //tra ve tong so luong tat ca san pham cho ajax
        $data = Session::get('gio_hang');
        $tong_so_san_pham = 0;
        if($data)
        {
            foreach($data as $item)
            {
                $tong_so_san_pham += $item["so_luong"];
            }
        }
        return $tong_so_san_pham;
    }



}
