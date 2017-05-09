<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\dang_ky;
use App\Http\Requests\dang_nhap;
use App\Http\Requests\dang_nhap_admin;
use DB;

class admin_controller extends helper_controller
{
   
//admin

   function hien_thi_ad(){
      if(Session::has('user'))
      {
         /* $thang=array();
            $tong=array();
          $hd=DB::table('hoa_don')->select(DB::raw('CONCAT(Month(ngay_dat), '-', Year(ngay_dat)) AS ThangNam'))->sum('tong_tien')->groupBy('Month(ngay_dat)','Year(ngay_dat)')->get();
          foreach($hd as $h)
            {
                $thang[]=$h->ThangNam;
                $tong[]=(float)$h->tong;	
            }*/

        //Session::put("laptop",$laptop);
        return view("admin.pages.home")
       /* ->with("hd",$hd)
        ->with("thang",$thang)
        ->with("tong",$tong) */
        ->with("thong_tin_nguoi_dung",Session::get('user'));
      }
      else
      {
       return view("admin.pages.login"); 
      }
    }
public function dang_nhap_check(dang_nhap_admin $request)
    {
        $thong_tin_nguoi_dung = DB::table("user")->where("username",$request->get("ten_dang_nhap"))->first();
        //echo "123";
        if(md5($request->get("mat_khau")) == $thong_tin_nguoi_dung->password)
        {
            Session::put('user', $thong_tin_nguoi_dung);

            return view('admin.pages.home')
                ->with("thong_tin_nguoi_dung",Session::get('user'));
        }
        else
        {
            $thong_bao = "Tài khoản hoặc mật khẩu không đúng!";
            return view('admin.pages.login')
                ->with("thong_bao",$thong_bao);
        }
    }

    public function dang_xuat()
    {
        Session::flush();
        return redirect()->route('ad');
    }
   function hien_thi_ds_hoadon(){
        $ds_hoa_don = DB::table("hoa_don")->orderby('ma_hoa_don','desc')->get();
        return view("admin.pages.ds_hoadon")->with('ds_hoa_don',$ds_hoa_don)
        ->with("thong_tin_nguoi_dung",Session::get('user'));
    }
    function hien_thi_ds_loaisanpham(){
        $ds_loai_san_pham = DB::table("loai_hoa")->orderby('MaLoai','desc')->get();
    return view("admin.pages.ds_loaisanpham")->with('ds_loai_san_pham',$ds_loai_san_pham)
    ->with("thong_tin_nguoi_dung",Session::get('user'));
    }
     function hien_thi_ds_sanpham(){
         //$thong_tin=Session::pull("laptop");

         $ds_san_pham = DB::table("hoa")->orderby('MaHoa','desc')->paginate(12);

        return view("admin.pages.ds_sanpham")->with('ds_san_pham',$ds_san_pham)
        ->with("thong_tin_nguoi_dung",Session::get('user'));
    }
    function hien_thi_ds_tin(){

         $ds_tin_tuc = DB::table("tin")->orderby('idTin','desc')->paginate(12);
        return view("admin.pages.ds_tin")->with('ds_tin_tuc',$ds_tin_tuc)
        ->with("thong_tin_nguoi_dung",Session::get('user'));
    }

 function hien_thi_ds_tintuc(){

         $ds_tin_tuc = DB::table("tin_tuc")->orderby('MaTT','desc')->get();
        return view("admin.pages.ds_tintuc")->with('ds_tin_tuc',$ds_tin_tuc)
        ->with("thong_tin_nguoi_dung",Session::get('user'));
    }





function hien_thi_ds_chude(){

     $ds_chu_de = DB::table("chu_de")->orderby('MaCD','desc')->get();
    return view("admin.pages.ds_chude")->with('ds_chu_de',$ds_chu_de)
    ->with("thong_tin_nguoi_dung",Session::get('user'));
}
function hien_thi_them_chude(){
    return view("admin.pages.them_chude")
    ->with("thong_tin_nguoi_dung",Session::get('user'));
}
function hien_thi_ds_khachhang(){

     $ds_khach_hang = DB::table("khach_hang")->orderby('ma_khach_hang','desc')->get();
    return view("admin.pages.ds_khachhang")->with('ds_khach_hang',$ds_khach_hang)->with("thong_tin_nguoi_dung",Session::get('user'));
}
function hien_thi_them_khachhang(){
    return view("admin.pages.them_khachhang")->with("thong_tin_nguoi_dung",Session::get('user'));
}





    function hien_thi_ds_user(){
        $ds_user = DB::select("SELECT * FROM user");
    return view("admin.pages.ds_user")->with('ds_user',$ds_user)->with("thong_tin_nguoi_dung",Session::get('user'));
    }
    function hien_thi_them_loaisanpham(){
        return view("admin.pages.them_loaisanpham")->with("thong_tin_nguoi_dung",Session::get('user'));
    }
    function hien_thi_them_sanpham(){
        return view("admin.pages.them_sanpham")->with("thong_tin_nguoi_dung",Session::get('user'));
    }
    function hien_thi_them_tintuc(){
        $ma_loai_tin=DB::table("loai_tin")->get();
        return view("admin.pages.them_tintuc")->with("thong_tin_nguoi_dung",Session::get('user'))->with("ma_loai_tin",$ma_loai_tin);
    }
    function hien_thi_them_tin(){
        $ma_lt=DB::table("loaitin")->select("idLT","Ten")->get();
        return view("admin.pages.them_tin")->with("thong_tin_nguoi_dung",Session::get('user'))->with("ma_lt",$ma_lt);
    }
     function hien_thi_them_user(){
        return view("admin.pages.them_user")->with("thong_tin_nguoi_dung",Session::get('user'));
    }

    function hien_thi_chart(){
        return view("admin.pages.chart")->with("thong_tin_nguoi_dung",Session::get('user'));
    }

    function hien_thi_table(){
        return view("admin.pages.table")->with("thong_tin_nguoi_dung",Session::get('user'));
    }

    function hien_thi_login(){
        return view("admin.pages.login")->with("thong_tin_nguoi_dung",Session::get('user'));
    }

    function hien_thi_404(){
        return view("admin.pages.404")->with("thong_tin_nguoi_dung",Session::get('user'));
    }









    function cap_nhat_san_pham($id){
        //echo $id;
        $thong_tin_san_pham = DB::table("hoa")->where('MaHoa',$id)->get();
        //echo "<pre>",print_r($thong_tin_san_pham),"</pre>";

        return view("admin.pages.cap_nhat_san_pham")
        ->with("thong_tin_san_pham",$thong_tin_san_pham[0])->with("thong_tin_nguoi_dung",Session::get('user'));
    }

    function cap_nhat_san_pham_store(Request $request){
        //echo $request->get("id");
        if($request->file('hinh'))
        {
            if($request->file('hinh')->isValid())
            {
                $request->file('hinh')->move("img/images/hoa/",$request->file('hinh')->getClientOriginalName());
                $hinh=$request->file('hinh')->getClientOriginalName();
            }
        }
        else
        {
            $hinh = $request->input('hinh');
        }
        $array=array("TenHoa"=>$request->get('ten_san_pham'),"Gia"=>$request->get('gia'),"ThanhPhan"=>$request->get('thanh_phan'),"NoiDung"=>$request->get('noi_dung'),"Hinh"=>$hinh,"MaLoai"=>$request->get('ma_loai'),"ThoiGian"=>$request->get('thoi_gian'),"KhuyenMai"=>$request->get('khuyen_mai'));
        $kq = DB::table("hoa")->where('MaHoa','=',$request->get('id'))->update($array);

        if($kq)
        {
            echo "<script>alert('Cập nhật thành công')</script>";
            //echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_sanpham'</script>";
            return redirect()->route("ds_sp");
            //echo "<script>alert('Cập nhật thành công')</script>";
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình cập nhật')</script>";
        }
    }
    function cap_nhat_tin_tuc($id){
        //echo $id;
        $tin_tuc = DB::table("tin_tuc")->where('MaTT','=',$id)->get();
        //echo "<pre>",print_r($thong_tin_san_pham),"</pre>";
        $ma_loai_tin=DB::table("loai_tin")->get();
        return view("admin.pages.cap_nhat_tin_tuc")
        ->with("tin_tuc",$tin_tuc[0])->with("thong_tin_nguoi_dung",Session::get('user'))->with("ma_loai_tin",$ma_loai_tin);
    }

    function cap_nhat_tin($id){
        //echo $id;
        $tin_tuc = DB::table("tin")->where('idTin','=',$id)->get();
        //echo "<pre>",print_r($thong_tin_san_pham),"</pre>";

        return view("admin.pages.cap_nhat_tin")
        ->with("tin_tuc",$tin_tuc[0])->with("thong_tin_nguoi_dung",Session::get('user'));
    }

    function cap_nhat_tin_tuc_store(Request $request){
        //echo $request->get("id");
        if($request->file('hinh'))
        {
            if($request->file('hinh')->isValid())
            {
                $request->file('hinh')->move("tintuc/",$request->file('hinh')->getClientOriginalName());
                $hinh=$request->file('hinh')->getClientOriginalName();
            }
        }
        else
        {
            $hinh=$request->input('hinh');
        } 
         $array=array("TenTT"=>$request->get('ten_tin_tuc'),"NoiDung"=>$request->get('noi_dung'),"Hinh"=>$hinh,"ThoiGian"=>$request->get('thoi_gian'),"MaLoaiTin"=>$request->get('ma_loai_tin'));
        $kq = DB::table("tin_tuc")->where('MaTT','=',$request->get('id'))->update($array);

        if($kq)
        {
            echo "<script>alert('Cập nhật thành công')</script>";
           // echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_tintuc'</script>";
            return redirect()->route("ds_tt");
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình cập nhật')</script>";
        }
    }


    function cap_nhat_tin_store(Request $request){
        //echo $request->get("id");
        if($request->file('hinh'))
        {
            if($request->file('hinh')->isValid())
            {
                $request->file('hinh')->move("tintuc/",$request->file('hinh')->getClientOriginalName());
                $hinh=$request->file('hinh')->getClientOriginalName();
            }
        }
        else
        {
            $hinh=$request->input('hinh');
        } 
         
        $mang=array("TieuDe"=>"$request->tieu_de","TomTat"=>"$request->tom_tat","Hinh"=>$hinh,"Ngay"=>"$request->thoi_gian","Content"=>"$request->noi_dung","idLT"=>"$request->ma_loai_tin","idTL"=>"$request->ma_the_loai",
        "SoLanXem"=>"1","TinNoiBat"=>"1","AnHien"=>"1");
        $kq = DB::table("tin")->where("idTin","=",$request->get("id"))->update($mang);

        if($kq)
        {
            echo "<script>alert('Cập nhật thành công')</script>";
           // echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_tintuc'</script>";
            return redirect()->route("ds_t");
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình cập nhật')</script>";
        }
    }
    function cap_nhat_chu_de($id){
        //echo $id;
        $chu_de = DB::select("SELECT * FROM chu_de WHERE MaCD = ?",[$id]);
        //echo "<pre>",print_r($thong_tin_san_pham),"</pre>";

        return view("admin.pages.cap_nhat_chu_de")
        ->with("chu_de",$chu_de[0])->with("thong_tin_nguoi_dung",Session::get('user'));
    }

    function cap_nhat_chu_de_store(Request $request){
        //echo $request->get("id");
        $kq = DB::update("UPDATE chu_de SET TenCD = ? WHERE MaCD = ?", [$request->get("ten_chu_de"), $request->get("id")]);

        if($kq)
        {
            echo "<script>alert('Cập nhật thành công')</script>";
            //echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_chude'</script>";
             return redirect()->route("ds_cd");
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình cập nhật')</script>";
        }
    }
    function cap_nhat_khach_hang($id){
        //echo $id;
        $khach_hang = DB::table("khach_hang")->where('ma_khach_hang','=',$id)->get();
        //echo "<pre>",print_r($thong_tin_san_pham),"</pre>";

        return view("admin.pages.cap_nhat_khach_hang")
        ->with("khach_hang",$khach_hang[0])->with("thong_tin_nguoi_dung",Session::get('user'));

    }

    function cap_nhat_khach_hang_store(Request $request){
        //echo $request->get("id");
        $array=array("ten_khach_hang"=>$request->get('ten_khach_hang'),"phai"=>$request->get('phai'),"email"=>$request->get('email'),"dia_chi"=>$request->get('dia_chi'),"dien_thoai"=>$request->get('dien_thoai'),"ghi_chu"=>$request->get('ghi_chu'));
        $kq = DB::table("khach_hang")->where('ma_khach_hang','=',$request->get('id'))->update($array);

        if($kq)
        {
            echo "<script>alert('Cập nhật thành công')</script>";
            //echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_khachhang'</script>";
             return redirect()->route("ds_kh");
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình cập nhật')</script>";
        }
    }
    function cap_nhat_loai_san_pham($id){
        //echo $id;
        $loai_san_pham = DB::table("loai_hoa")->where('MaLoai','=',$id)->get();
        //echo "<pre>",print_r($thong_tin_san_pham),"</pre>";

        return view("admin.pages.cap_nhat_loai_san_pham")
        ->with("loai_san_pham",$loai_san_pham[0])->with("thong_tin_nguoi_dung",Session::get('user'));
    }

    function cap_nhat_loai_san_pham_store(Request $request){
        $array=array("TenLoai"=>$request->get('ten_loai'));
        //echo $request->get("id");
        $kq = DB::table("loai_hoa")->where('MaLoai','=',$request->get('id'))->update($array);

        if($kq)
        {
            echo "<script>alert('Cập nhật thành công')</script>";
            //echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_loaisanpham'</script>";
             return redirect()->route("ds_lsp");
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình thêm')</script>";
        }
    }
    function them_loai_san_pham(Request $request)
    {
        $mang=array("TenLoai"=>"$request->ten_loai");
        $kq= DB::table("loai_hoa")->insertGetId($mang);
        if($kq)
        {
            echo "<script>alert('Thêm thành công')</script>";
            //echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_sanpham'</script>";
             return redirect()->route("ds_lsp");
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình cập nhật')</script>";
        }
    }
    
    function them_khach_hang(Request $request)
    {
        $mang=array("ten_khach_hang"=>"$request->ten_khach_hang","phai"=>"$request->phai","email"=>"$request->email","dia_chi"=>"$request->dia_chi","dien_thoai"=>"$request->dien_thoai","ghi_chu"=>"$request->ghi_chu");
        $kq= DB::table("khach_hang")->insertGetId($mang);
        if($kq)
        {
            echo "<script>alert('Thêm thành công')</script>";
            //echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_khachhang'</script>";
             return redirect()->route("ds_kh");
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình thêm')</script>";
        }
    }
    function them_san_pham(Request $request)
    {
        if($request->file('hinh'))
        {
            if($request->file('hinh')->isValid())
            {
                $request->file('hinh')->move("img/images/san_pham/",$request->file('hinh')->getClientOriginalName());
                $hinh = $request->file('hinh')->getClientOriginalName();
                //print_r($request->file('hinh_san_pham')->getClientOriginalName());exit;
            }
        }
        else
        {
            echo "<script>alert('Vui lòng chọn hình sản phẩm')</script>";
            //echo "<script>window.location = '".url('/')."/ad/them-san-pham"."'</script>";
            die;
        }
        $mang=array("TenHoa"=>"$request->ten_san_pham","Gia"=>"$request->gia","ThanhPhan"=>"$request->thanh_phan","NoiDung"=>"$request->noi_dung","Hinh"=>$hinh,"MaLoai"=>"$request->ma_loai","ThoiGian"=>"$request->thoi_gian","KhuyenMai"=>"$request->khuyen_mai");
        $kq= DB::table("hoa")->insertGetId($mang);
        if($kq)
        {
            echo "<script>alert('Thêm thành công')</script>";
            //echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_sanpham'</script>";
             return redirect()->route("ds_sp");
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình thêm')</script>";
        }
    }
    function them_chu_de(Request $request)
    {
        $mang=array("TenCD"=>"$request->ten_chu_de");
        $kq=DB::table("chu_de")->insertGetId($mang);
       
        //$kq=DB::insert("INSERT INTO loai_hoa (MaLoai, TenLoai) VALUES (?, ?)", [$ma_loai,$ten_loai]);*/
        if($kq)
        {
            echo "<script>alert('Thêm thành công')</script>";
            //echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_chude'</script>";
             return redirect()->route("ds_cd");   
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình thêm')</script>";
        }
    }
    function them_tin_tuc(Request $request)
    {
        if($request->file('hinh'))
        {
            if($request->file('hinh')->isValid())
            {
                $request->file('hinh')->move("tintuc/",$request->file('hinh')->getClientOriginalName());
                $hinh = $request->file('hinh')->getClientOriginalName();
                //print_r($request->file('hinh_san_pham')->getClientOriginalName());exit;
            }
        }
        else
        {
            echo "<script>alert('Vui lòng chọn hình tin tức')</script>";
            echo "<script>window.location = '".url('/')."/ad/them-tin-tuc"."'</script>";
            die;
        }
        
        
        $mang=array("TenTT"=>"$request->ten_tin_tuc","NoiDung"=>"$request->noi_dung","Hinh"=>$hinh,"ThoiGian"=>"$request->thoi_gian","MaLoaiTin"=>"$request->ma_loai_tin");
        $kq=DB::table("tin_tuc")->insertGetId($mang);
       
        //$kq=DB::insert("INSERT INTO loai_hoa (MaLoai, TenLoai) VALUES (?, ?)", [$ma_loai,$ten_loai]);*/
        if($kq)
        {
            echo "<script>alert('Thêm thành công')</script>";
           // echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_tintuc'</script>";
            return redirect()->route("ds_tt");   
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình thêm')</script>";
        }
    }
    function them_tin(Request $request)
    {
        if($request->file('hinh'))
        {
            if($request->file('hinh')->isValid())
            {
                $request->file('hinh')->move("tintuc/",$request->file('hinh')->getClientOriginalName());
                $hinh = $request->file('hinh')->getClientOriginalName();
                //print_r($request->file('hinh_san_pham')->getClientOriginalName());exit;
            }
        }
        else
        {
            echo "<script>alert('Vui lòng chọn hình tin tức')</script>";
            echo "<script>window.location = '".url('/')."/ad/them-tin-tuc"."'</script>";
            die;
        }
        $idtl=DB::table("loaitin")->select("idTL")->where("idLT",$request->ma_loai_tin)->get();
       // print_r($idtl);
        $idTL=0;
        foreach($idtl as $id)
        {
            $idTL=$id->idTL;
           // echo $idTL;
        }
        $ngay_hien_tai = date('Y-m-d H:i:s');
        $mang=array("TieuDe"=>"$request->tieu_de","TomTat"=>"$request->tom_tat","Hinh"=>$hinh,"Ngay"=>"$ngay_hien_tai","Content"=>"$request->noi_dung","idLT"=>"$request->ma_loai_tin","idTL"=>"$idTL",
        "SoLanXem"=>"1","TinNoiBat"=>"1","AnHien"=>"1");
        $kq=DB::table("tin")->insertGetId($mang);
       
        //$kq=DB::insert("INSERT INTO loai_hoa (MaLoai, TenLoai) VALUES (?, ?)", [$ma_loai,$ten_loai]);*/
        if($kq)
        {
            echo "<script>alert('Thêm thành công')</script>";
           // echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_tintuc'</script>";
            return redirect()->route("ds_t");   
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình thêm')</script>";
        }
    }
    function them_user(Request $request)
    {
        $mang=array("username"=>"$request->ten_dang_nhap","password"=>"$request->mat_khau","fullname"=>"$request->fullname","birthdate"=>"$request->ngay_sinh","gender"=>"$request->gioi_tinh","address"=>"$request->dia_chi","email"=>"$request->email","identitycard"=>"$request->cmnd","mobiphone"=>"$request->sdt","role"=>"$request->quyen_han");
        $kq=DB::table("user")->insertGetId($mang);
       
        //$kq=DB::insert("INSERT INTO loai_hoa (MaLoai, TenLoai) VALUES (?, ?)", [$ma_loai,$ten_loai]);*/
        if($kq)
        {
            echo "<script>alert('Thêm thành công')</script>";
           // echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_user'</script>";
            return redirect()->route("ds_us");   
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình thêm')</script>";
        }
    }

    function cap_nhat_hoa_don($id){
        //echo $id;
        $hoa_don = DB::table("hoa_don")->where('ma_hoa_don','=',$id)->get();
        //echo "<pre>",print_r($thong_tin_san_pham),"</pre>";

        return view("admin.pages.cap_nhat_hoa_don")
        ->with("hoa_don",$hoa_don[0])->with("thong_tin_nguoi_dung",Session::get('user'));
    }

    function cap_nhat_hoa_don_store(Request $request){
        //echo $request->get("id");
         $array=array("ma_khach_hang"=>$request->get('ma_khach_hang'),"ngay_dat"=>$request->get('ngay_dat'),"tong_tien"=>$request->get('tong_tien'),"tien_dat_coc"=>$request->get('tien_dat_coc'),"con_lai"=>$request->get('con_lai'),"hinh_thuc_thanh_toan"=>$request->get('hinh_thuc_thanh_toan'),"ghi_chu"=>$request->get('ghi_chu'));
        //echo $request->get("id");
        $kq = DB::table("hoa_don")->where('ma_hoa_don','=',$request->get('id'))->update($array);

        if($kq)
        {
            echo "<script>alert('Cập nhật thành công')</script>";
            //echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_hoadon'</script>";
             return redirect()->route("ds_hd");
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình thêm')</script>";
        }
    }
    function cap_nhat_user($id){
        //echo $id;
        $user = DB::table("user")->where('id','=',$id)->get();
        //echo "<pre>",print_r($thong_tin_san_pham),"</pre>";

        return view("admin.pages.cap_nhat_user")
        ->with("user",$user[0])->with("thong_tin_nguoi_dung",Session::get('user'));
    }

    function cap_nhat_user_store(Request $request){
        //echo $request->get("id");
        $array=array("username"=>$request->get('ten_dang_nhap'),"password"=>$request->get('mat_khau'),"fullname"=>$request->get('fullname'),"birthdate"=>$request->get('ngay_sinh'),"gender"=>$request->get('gioi_tinh'),"address"=>$request->get('dia_chi'),"email"=>$request->get('email'),"identitycard"=>$request->get('cmnd'),"mobiphone"=>$request->get('sdt'),"role"=>$request->get('quyen_han'));
        $kq = DB::table("user")->where('id','=',$request->get('id'))->update($array);

        if($kq)
        {
            echo "<script>alert('Cập nhật thành công')</script>";
            //echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_user'</script>";
             return redirect()->route("ds_us");
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình cập nhật')</script>";
        }
    }














    function xoa_san_pham($id){
        $kq = DB::table('hoa')->where('MaHoa', '=', $id)->delete();
        if($kq)
        {
            echo "<script>alert('Xóa thành công')</script>";
            //echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_sanpham'</script>";
             return redirect()->route("ds_sp");
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình xóa')</script>";
        }
    }







    function xoa_chu_de($id){
        $kq = DB::table('chu_de')->where('MaCD', '=', $id)->delete();
        if($kq)
        {
            echo "<script>alert('Xóa thành công')</script>";
           // echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_chude'</script>";
            return redirect()->route("ds_cd");
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình xóa')</script>";
        }
    }
    function xoa_hoa_don($id){
        $kq = DB::table('hoa_don')->where('ma_hoa_don', '=', $id)->delete();
        if($kq)
        {
            echo "<script>alert('Xóa thành công')</script>";
            //echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_hoadon'</script>";
             return redirect()->route("ds_hd");
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình xóa')</script>";
        }
    }
    function xoa_khach_hang($id){
        $kq = DB::table('khach_hang')->where('ma_khach_hang', '=', $id)->delete();
        if($kq)
        {
            echo "<script>alert('Xóa thành công')</script>";
            //echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_khachhang'</script>";
             return redirect()->route("ds_kh");
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình xóa')</script>";
        }
    }
    function xoa_loai_san_pham($id){
        $kq = DB::table('loai_hoa')->where('MaLoai', '=', $id)->delete();
        if($kq)
        {
            echo "<script>alert('Xóa thành công')</script>";
            //echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_loaisanpham'</script>";
             return redirect()->route("ds_lsp");
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình xóa')</script>";
        }
    }
    function xoa_tin_tuc($id){
        $kq = DB::table('tin_tuc')->where('MaTT', '=', $id)->delete();
        if($kq)
        {
            echo "<script>alert('Xóa thành công')</script>";
            //echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_tintuc'</script>";
             return redirect()->route("ds_tt");
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình xóa')</script>";
        }
    }

     function xoa_tin($id){
        $kq = DB::table('tin')->where('idTin', '=', $id)->delete();
        if($kq)
        {
            echo "<script>alert('Xóa thành công')</script>";
            //echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_tintuc'</script>";
             return redirect()->route("ds_t");
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình xóa')</script>";
        }
    }
    function xoa_user($id){
        $kq = DB::table('user')->where('id', '=', $id)->delete();
        if($kq)
        {
            echo "<script>alert('Xóa thành công')</script>";
            //echo "<script>window.location = 'http://localhost:8888/web_bh2/ad/ds_user'</script>";
             return redirect()->route("ds_us");
        }
        else
        {
            echo "<script>alert('Xảy ra lỗi trong quá trình xóa')</script>";
        }
    }

    function sua_hoa_don(Request $request)
    {
        $ds=$request->get('tinh_trang');
       $dsHoa_dons=$request->get('ma_hd');
        //echo $dsHoa_dons;
       // print_r($ds);
        //print_r($dsHoa_dons);
        for($i=0;$i<count($dsHoa_dons);$i++)
        {
           // echo $ds[$i];
            //echo $dsHoa_dons[$i]-
            $kq=DB::table("hoa_don")->where("ma_hoa_don",$dsHoa_dons[$i])->update(["tinh_trang"=>$ds[$i]]);
            
        }
        return redirect()->route('ds_hd');
       

    }

    function hien_thi_ct_hoadon($id){
    $tt_hd = DB::table('chi_tiet_hoa_don')->where("ma_hoa_don",$id)
            ->join('hoa', 'chi_tiet_hoa_don.MaHoa', '=', 'hoa.MaHoa')
            ->select('chi_tiet_hoa_don.*', 'hoa.TenHoa', 'hoa.Hinh')
            ->get();

    $tt_kh=DB::table('hoa_don')->where("ma_hoa_don",$id)->join('khach_hang','hoa_don.ma_khach_hang','=','khach_hang.ma_khach_hang')->select('khach_hang.*')->get();

    $tong_tien=0;
    
    return view("admin.pages.ct_hoadon")->with("thong_tin_nguoi_dung",Session::get('user'))
                                        ->with("tt_hd",$tt_hd)
                                        ->with("tong_tien",$tong_tien)
                                        ->with("tt_kh",$tt_kh);
}




}

