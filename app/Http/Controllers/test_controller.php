<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class test_controller extends helper_controller
{
    function trang_chao_2(){
        //echo $this->test_ke_thua("đây là trang chào 2");
        $mang=array('1'=>'2','2'=>'3','3'=>'4','4'=>'5','5'=>'6');
        $chao="Chào các bạn";
        $mang_so=array(1231,61565,165,156,165,1,561,651,56,1,561);
        return view("demo_view")
            ->with("diem",20)
            ->with("mang_so",$mang_so)
            ->with("mang",$mang);
    }

    function getThuNghiemRouteController(){
        echo "vào được route controller";
    }

    function tinh_hai_so($so_thu_1, $so_thu_2, $phep_tinh){
        //echo $so_thu_1 . ' - ' . $so_thu_2 . ' - ' . $phep_tinh;

        switch($phep_tinh){
            case "phep_cong":
                return $so_thu_1 + $so_thu_2;
            case "phep_tru":
                return $so_thu_1 - $so_thu_2;
            case "phep_nhan":
                return $so_thu_1 * $so_thu_2;
            case "phep_chia":
                return $so_thu_1 / $so_thu_2;
        }
    }

    function xem_mang(){
        $mang_doi_tuong = array();
        

        //$doi_tuong = new doi_tuong("a","b");
        //echo "<pre>",print_r($doi_tuong),"</pre>";

        for($i = 0; $i < 10; $i++)
        {
            $mang_doi_tuong[] = new doi_tuong("ma_" . $i,"ten_" . $i);
        }

        echo "<pre>",print_r($mang_doi_tuong),"</pre>";

        $mang_2_chieu = $this->chuyen_mang_doi_tuong_sang_mang_2_chieu($mang_doi_tuong);

        echo "<pre>",print_r($mang_2_chieu),"</pre>";
    }

    //test bỏ dấu
    function test_bo_dau($arr){
        echo $this->bo_dau($arr);
    }

   /* function phan_so(){
        $mang_ps=array();
        for($i=0;$i<10;$i++)
        {
            $mang_ps[]=new phan_so("Tu : ".$i," Mau : ".$i);
        }
        echo "<pre>",print_r($mang_ps);
    }*/


}




class doi_tuong{
    public $ma, $ten;

    function __construct($ma, $ten)
    {
        $this->ma = $ma;
        $this->ten = $ten;
    }
}
