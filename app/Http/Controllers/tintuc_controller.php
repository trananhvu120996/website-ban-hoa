<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\dang_ky;
use App\Http\Requests\dang_nhap;
use App\Http\Requests\lien_he;
use DB;

class tintuc_controller extends helper_controller
{
    //function chi_tiet_san_pham($id, $alias){
      //  echo $id . " |||| " . $alias;
   // }
   function hien_thi_trang_chu(){
       
      $ds_loai=DB::table("theloai")->get();     

      $tin_noi_bat=DB::table("tin")->orderBy("SoLanXem","desc")->skip(0)->take(5)->get();

      $du_lich=DB::table("tin")->where("idLT","=",3)->get();

      $dn=DB::table("tin")->where("idLT","=",25)->orderBy("idTin","desc")->skip(0)->take(1)->get();
      $doanh_nhan=DB::table("tin")->where("idLT","=",25)->orderBy("idTin","desc")->skip(1)->take(4)->get();

      $tr_moi=DB::table("tin")->where("idLT","=",5)->orderBy("idTin","desc")->skip(0)->take(1)->get();
      $thoi_trang=DB::table("tin")->where("idLT","=",5)->orderBy("idTin","desc")->skip(1)->take(4)->get();

      $cn_moi=DB::table("tin")->where("idLT","=",2)->orderBy("idTin","desc")->skip(0)->take(1)->get();
      $cong_nghe=DB::table("tin")->where("idLT","=",2)->orderBy("idTin","desc")->skip(1)->take(4)->get();

      $gt_moi=DB::table("tin")->where("idLT","=",30)->orderBy("idTin","desc")->skip(0)->take(1)->get();
      $giai_tri=DB::table("tin")->where("idLT","=",30)->orderBy("idTin","desc")->skip(1)->take(5)->get();

      $tin_pho_bien=DB::table("tin_tuc")->get();

      
      $san_pham_tieu_bieu=DB::table("hoa")->skip(0)->take(4)->get();

      $theloai=DB::table("loaitin")->get();
        return view('home')->with("ds_loai",$ds_loai)
                            ->with("tin_noi_bat",$tin_noi_bat)
                            ->with("du_lich",$du_lich)
                            ->with("dn",$dn)
                            ->with("doanh_nhan",$doanh_nhan)
                            ->with("tr_moi",$tr_moi)
                            ->with("thoi_trang",$thoi_trang)
                            ->with("cn_moi",$cn_moi)
                            ->with("cong_nghe",$cong_nghe)
                            ->with("gt_moi",$gt_moi)
                            ->with("giai_tri",$giai_tri)
                            ->with("theloai",$theloai)
                            ->with("tin_pho_bien",$tin_pho_bien)
                            
                            ->with("san_pham_tieu_bieu",$san_pham_tieu_bieu);         
   }

   function hien_thi_single($idTin){

      $ds_loai=DB::table("theloai")->get();
      //echo $kq=$_SERVER['REQUEST_URI'];


      $theloai=DB::table("loaitin")->get();

      $thong_tin=DB::table("tin")->where("idTin",$idTin)->get();
     /* echo "<pre>";
      print_r($thong_tin);
      echo "</pre>";*/
      $loai=DB::table("tin")->select("idTL")->where("idTin",$idTin)->get();
        //echo "<pre>",print_r($loai),"</pre>";
        foreach($loai as $loai)
        {
            $l=$loai->idTL;
            $tt_cung_loai=DB::table("tin")->where("idTL",$l)->where("idTin","!=",$idTin)->skip(0)->take(10)->get();
        }

      $tin_noi_bat=DB::table("tin")->orderBy("SoLanXem","desc")->skip(0)->take(6)->get();

      
            
      $san_pham_tieu_bieu=DB::table("hoa")->skip(0)->take(4)->get();

      
       return view("pages.single_page")->with("ds_loai",$ds_loai)
                                        ->with("theloai",$theloai)
                                        ->with("thong_tin",$thong_tin)
                                        ->with("tt_cung_loai",$tt_cung_loai)
                                        ->with("tin_noi_bat",$tin_noi_bat)
                                                                               ->with("san_pham_tieu_bieu",$san_pham_tieu_bieu)
                                        ->with("tt_cung_loai",$tt_cung_loai);
   }

  function hien_thi_danhmuc($idTL){

    $ds_loai=DB::table('theloai')->get();

    $tin_noi_bat=DB::table("tin")->orderBy("SoLanXem","desc")->skip(0)->take(5)->get();
    $du_lich=DB::table("tin")->where("idLT","=",3)->orderBy("idTin","desc")->get();
    $theloai=DB::table("loaitin")->get();

    $thong_tin=DB::table("tin")->where("idTL",$idTL)->skip(0)->take(5)->get();

    $chi_tiet=DB::table("tin")->where("idTL",$idTL)->paginate(5);
    //$chi_tiet_2=DB::table("tin")->where("idTL",$idTL)->skip(7)->take(13)->paginate(6);

    

    $san_pham_tieu_bieu=DB::table("hoa")->skip(0)->take(4)->get();

    return view('pages.danhmuc')->with('ds_loai',$ds_loai)
                                ->with('du_lich',$du_lich)
                                ->with('tin_noi_bat',$tin_noi_bat)
                                ->with('theloai',$theloai)
                                ->with('thong_tin',$thong_tin)
                                ->with('chi_tiet',$chi_tiet)
                                
                                ->with('san_pham_tieu_bieu',$san_pham_tieu_bieu);
  }

}

