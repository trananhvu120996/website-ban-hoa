<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\dang_ky;
use App\Http\Requests\dang_nhap;
use App\Http\Requests\lien_he;
use DB,Cart, Mail;

class template_controller extends helper_controller
{
   function hien_thi_trang_chu(){
       $name=Session::get("name");
       $ds_loai= DB::table("loai_hoa")->get();
       $ds_tt= DB::table("loai_tin")->get();
       $sp_ban_chay_1=DB::table("hoa")->orderBy("ThoiGian","desc")->skip(0)->take(5)->get();
        $sp_ban_chay_2=DB::table("hoa")->orderBy("ThoiGian","desc")->skip(6)->take(5)->get();
       $sp_ban_chay_3=DB::table("hoa")->orderBy("ThoiGian","acs")->skip(6)->take(8)->get();
       $sp_ban_chay_4=DB::table("hoa")->where("KhuyenMai",1)->get();
       $sp_loai_1=DB::table("hoa")->whereBetween("MaLoai",[1,2])->skip(1)->take(24)->get();
       $tin_tuc= $ds_tt= DB::table("tin_tuc")->get();

       $count=Cart::count();
        $content=Cart::content();
        $total=0;

        $tin_noi_bat=DB::table("tin")->orderBy("SoLanXem","desc")->skip(0)->take(16)->get();

        $auto_search=DB::table("hoa")->select("ThanhPhan")->get();
       //print_r($auto_search);
        
      //  echo $auto_hoa;

        
      
       //lay ds san pham moi (feature product)
      /* $ds_san_pham_moi = DB::select("SELECT * FROM san_pham WHERE ma_loai = :ma_loai ORDER BY ma DESC LIMIT 0,6",["ma_loai"=>"10"]);
       foreach($ds_san_pham_moi as $san_pham)
       {
           $san_pham->alias = $this->bo_dau($san_pham->ten_san_pham);
       }
       //echo "<pre>",print_r($ds_san_pham_moi),"</pre>";

       //lay ds slide banner
       $ds_slide_banner = DB::select("SELECT * FROM slide_banner WHERE trang_thai = 1");
       //echo "<pre>",print_r($ds_slide_banner),"</pre>";*/

       return view("pages.index")->with("name",$name)
                                ->with("ds_loai",$ds_loai)
                                ->with("ds_tt",$ds_tt)
                                ->with("sp_ban_chay_1",$sp_ban_chay_1)
                                ->with("sp_ban_chay_2",$sp_ban_chay_2)
                                ->with("sp_ban_chay_3",$sp_ban_chay_3)
                                ->with("sp_ban_chay_4",$sp_ban_chay_4)
                                ->with("sp_loai_1",$sp_loai_1)
                                ->with("tin_tuc",$tin_tuc)                             
                                ->with("count",$count)
                                ->with("content",$content)
                                ->with("total",$total)
                                ->with("tin_noi_bat",$tin_noi_bat)
                                ->with("auto_search",$auto_search);                          
   }

   function hien_thi_about(){
       $name=Session::get("name");
       $ds_loai= DB::table("loai_hoa")->get();
       $ds_tt= DB::table("loai_tin")->get();
        $count=Cart::count();
        $content=Cart::content();
        $total=0;
         $auto_search=DB::table("hoa")->select("ThanhPhan")->get();
       return view("pages.about")->with("name",$name)
                                ->with("ds_loai",$ds_loai)
                                ->with("ds_tt",$ds_tt)
                                ->with("count",$count)
                                ->with("content",$content)
                                ->with("total",$total)
                                ->with("auto_search",$auto_search);   
   }

  

   function hien_thi_contact(){
       $name=Session::get("name");
        $ds_loai= DB::table("loai_hoa")->get();
         $ds_tt= DB::table("loai_tin")->get();
          $count=Cart::count();
        $content=Cart::content();
        $total=0;
         $auto_search=DB::table("hoa")->select("ThanhPhan")->get();
       return view("pages.contact")->with("name",$name)
                                    ->with("ds_loai",$ds_loai)
                                    ->with("ds_tt",$ds_tt)
                                ->with("count",$count)
                                ->with("content",$content)
                                ->with("total",$total)
                                ->with("auto_search",$auto_search);                                   
   }

     function hien_thi_checkout(){
         $name=Session::get("name");
         $ds_loai= DB::table("loai_hoa")->get();
         $ds_tt= DB::table("loai_tin")->get();
          $count=Cart::count();
        $content=Cart::content();
        $total=0;
         $auto_search=DB::table("hoa")->select("ThanhPhan")->get();
       return view("pages.checkout")->with("name",$name)
                                    ->with("ds_loai",$ds_loai)
                                    ->with("ds_tt",$ds_tt)                           
                                ->with("count",$count)
                                ->with("content",$content)
                                ->with("total",$total)
                                ->with("auto_search",$auto_search);  
   }            

    function hien_thi_checkout_address(Request $request){
        $name=Session::get("name");
        $ma=Session::get("ma");
         $ds_loai= DB::table("loai_hoa")->get();
           $ds_tt= DB::table("loai_tin")->get();
            $count=Cart::count();
        $content=Cart::content();
        $total=0;
             $auto_search=DB::table("hoa")->select("ThanhPhan")->get();
       // $tai_khoan = DB::select("SELECT * FROM khach_hang WHERE email = ?",[$request->get("loginemail")]);
       $thong_tin_kh=DB::table("khach_hang")->where("ma_khach_hang",$ma)->get();
       //echo "<pre>",print_r($thong_tin_kh),"</pre>";
       return view("pages.checkout_address")->with("name",$name)
                                            ->with("ds_loai",$ds_loai)
                                            ->with("ds_tt",$ds_tt)
                                            ->with("thong_tin_kh",$thong_tin_kh)
                                            

                                ->with("count",$count)
                                ->with("content",$content)
                                ->with("total",$total)
                                ->with("auto_search",$auto_search);  
   }

   function hien_thi_checkout_regis(){
       $name=Session::get("name");
       
        $ds_loai= DB::table("loai_hoa")->get();
         $ds_tt= DB::table("loai_tin")->get();
          $count=Cart::count();
        $content=Cart::content();
        $total=0;

         $auto_search=DB::table("hoa")->select("ThanhPhan")->get();
       return view("pages.checkout_regis")->with("name",$name)
                                        ->with("ds_loai",$ds_loai)
                                        ->with("ds_tt",$ds_tt)
                                 ->with("count",$count)
                                ->with("content",$content)
                                ->with("total",$total)
                                ->with("auto_search",$auto_search);  
   }


   function hien_thi_checkout_signin(){
       $name=Session::get("name");
        $ds_loai= DB::table("loai_hoa")->get();
         $ds_tt= DB::table("loai_tin")->get();
          $count=Cart::count();
        $content=Cart::content();
        $total=0;
         $auto_search=DB::table("hoa")->select("ThanhPhan")->get();
       return view("pages.checkout_signin")->with("name",$name)
                                            ->with("ds_loai",$ds_loai)
                                             ->with("ds_tt",$ds_tt)
                                             ->with("count",$count)
                                            ->with("content",$content)
                                            ->with("total",$total)
                                            ->with("auto_search",$auto_search);  
   }

   function hien_thi_my_account(){
       $name=Session::get("name");
        $ds_loai= DB::table("loai_hoa")->get();
        $ds_tt= DB::table("loai_tin")->get();
         $count=Cart::count();
        $content=Cart::content();
        $total=0;
         $auto_search=DB::table("hoa")->select("ThanhPhan")->get();

       return view("pages.my_account")->with("name",$name)
                                        ->with("ds_loai",$ds_loai)
                                        ->with("ds_tt",$ds_tt)
                                        
                                ->with("count",$count)
                                ->with("content",$content)
                                ->with("total",$total)
                                ->with("auto_search",$auto_search);  
   }

   function hien_thi_regis(){
       $name=Session::get("name");
        $ds_loai= DB::table("loai_hoa")->get();
         $ds_tt= DB::table("loai_tin")->get();
          $count=Cart::count();
        $content=Cart::content();
        $total=0;
         $auto_search=DB::table("hoa")->select("ThanhPhan")->get();

       return view("pages.regis")->with("name",$name)
                                ->with("ds_loai",$ds_loai)
                                ->with("ds_tt",$ds_tt)
                                
                                ->with("count",$count)
                                ->with("content",$content)
                                ->with("total",$total)
                                ->with("auto_search",$auto_search);  
   }
     function hien_thi_login(){
        $name=Session::get("name");
        $ds_loai= DB::table("loai_hoa")->get();
        $ds_tt= DB::table("loai_tin")->get();
         $count=Cart::count();
        $content=Cart::content();
        $total=0;
         $auto_search=DB::table("hoa")->select("ThanhPhan")->get();
       return view("pages.login")->with("name",$name)
                                ->with("ds_loai",$ds_loai)
                                ->with("ds_tt",$ds_tt)
                                
                                ->with("count",$count)
                                ->with("content",$content)
                                ->with("total",$total)
                                ->with("auto_search",$auto_search);                    
   }

    function hien_thi_product(){
        $name=Session::get("name");
         $ds_loai= DB::table("loai_hoa")->get();
         $ds_tt= DB::table("loai_tin")->get();
         $hoa= DB::table("hoa")->paginate(12);
         $hoa_moi= DB::table("hoa")->skip(0)->take(5)->get();
          $count=Cart::count();
        $content=Cart::content();
        $total=0;
         $auto_search=DB::table("hoa")->select("ThanhPhan")->get();
       return view("pages.product")->with("name",$name)
                                    ->with("ds_loai",$ds_loai)
                                    ->with("ds_tt",$ds_tt)
                                    ->with("hoa",$hoa)
                                    ->with("hoa_moi",$hoa_moi)
                                    
                                ->with("count",$count)
                                ->with("content",$content)
                                ->with("total",$total)
                                ->with("auto_search",$auto_search);    
   }

   function hien_thi_news(){
       $name=Session::get("name");
       $ds_loai= DB::table("loai_hoa")->get();
        $ds_tt= DB::table("loai_tin")->get();
        $sp_moi=DB::table("hoa")->orderBy("ThoiGian","desc")->skip(0)->take(5)->get();
        $tin_tuc=DB::table("tin_tuc")->get();
         $count=Cart::count();
        $content=Cart::content();
        $total=0;
         $auto_search=DB::table("hoa")->select("ThanhPhan")->get();
       return view("pages.news")->with("name",$name)
                                ->with("ds_loai",$ds_loai)
                                ->with("ds_tt",$ds_tt)
                                ->with("sp_moi",$sp_moi)
                                ->with("tin_tuc",$tin_tuc)
                                 ->with("count",$count)
                                ->with("content",$content)
                                ->with("total",$total)
                                ->with("auto_search",$auto_search);  

   }
   function hien_thi_single_news($ma){
       $name=Session::get("name");
        $ds_loai= DB::table("loai_hoa")->get();
        $ds_tt= DB::table("loai_tin")->get();
        $thong_tin_tin_tuc = DB::table("tin_tuc")->where("MaTT",$ma)->get();
        $tin= DB::table("tin_tuc")->get();
        $sp_moi=DB::table("hoa")->orderBy("ThoiGian","desc")->skip(10)->take(4)->get();
         $count=Cart::count();
        $content=Cart::content();
        $total=0;
         $auto_search=DB::table("hoa")->select("ThanhPhan")->get();
       return view("pages.single_news")->with("name",$name)
                                         ->with("ds_loai",$ds_loai)
                                        ->with("ds_tt",$ds_tt)
                                        ->with("thong_tin_tin_tuc",$thong_tin_tin_tuc)
                                        ->with("tin",$tin)
                                        ->with("sp_moi",$sp_moi)
                                      ->with("count",$count)
                                ->with("content",$content)
                                ->with("total",$total)
                                ->with("auto_search",$auto_search);  
   }

    function hien_thi_single_product($id){
        $name=Session::get("name");
        $ds_loai= DB::table("loai_hoa")->get();
        $ds_tt= DB::table("loai_tin")->get();
        $sp_moi=DB::table("hoa")->orderBy("ThoiGian","desc")->skip(10)->take(4)->get();
        $thong_tin_sp= DB::table("hoa")->where("MaHoa",$id)->get();
        $loai=DB::table("hoa")->select("MaLoai")->where("MaHoa",$id)->get();
        //echo "<pre>",print_r($loai),"</pre>";
        foreach($loai as $loai)
        {
            $l=$loai->MaLoai;
            $sp_cung_loai=DB::table("hoa")->where("MaLoai",$l)->where("MaHoa","!=",$id)->get();
        }
        $count=Cart::count();
        $content=Cart::content();
        $total=0;

        $host=$_SERVER['HTTP_HOST'];
        $url=$_SERVER['REQUEST_URI'];
        $get_url=$host.$url;
        $auto_search=DB::table("hoa")->select("ThanhPhan")->get();
       return view("pages.single_product")->with("name",$name)
                                       ->with("ds_loai",$ds_loai)
                                       ->with("ds_tt",$ds_tt)
                                       ->with("thong_tin_sp",$thong_tin_sp)
                                       ->with("sp_cung_loai",$sp_cung_loai)
                                        ->with("sp_moi",$sp_moi)
                                ->with("count",$count)
                                ->with("content",$content)
                                ->with("total",$total)
                                ->with("get_url",$get_url)
                                ->with("auto_search",$auto_search);                                          
   }



   function hien_thi_search_product($loai){
        $name=Session::get("name");
        $ds_loai= DB::table("loai_hoa")->get();
        $ten_loai=DB::table('loai_hoa')->select('TenLoai')->where('MaLoai',$loai)->get();
        $ds_hoa=DB::table("hoa")->where("MaLoai",$loai)->paginate(12);
        $hoa_moi= DB::table("hoa")->skip(0)->take(5)->get();
        $count=Cart::count();
        $content=Cart::content();
        $total=0;

         $auto_search=DB::table("hoa")->select("ThanhPhan")->get();
        
        return view("pages.product_search")->with("name",$name)
                                       ->with("ds_loai",$ds_loai)
                                       ->with("ds_hoa",$ds_hoa)
                                       ->with("hoa_moi",$hoa_moi)
                                       ->with("count",$count)
                                ->with("content",$content)
                                ->with("total",$total)
                                ->with("ten_loai",$ten_loai)
                                ->with("auto_search",$auto_search); 

                                       
   }







   function hien_thi_search(Request $request){
       $name=Session::get("name");
        $ds_loai= DB::table("loai_hoa")->get();
        $hoa_moi= DB::table("hoa")->skip(0)->take(5)->get();
        $count=Cart::count();
        $content=Cart::content();
        $total=0;
        $loai=$request->get("catsearch");
        $ten=$request->get("browser");
        //echo $loai;
        //echo $ten;

        $ds_hoa_search=DB::table("hoa")->where("MaLoai",[$loai])->where("ThanhPhan","like","%$ten%")->paginate(12);
         $auto_search=DB::table("hoa")->select("ThanhPhan")->get();

        return view("pages.search")->with("name",$name)
                                       ->with("ds_loai",$ds_loai)
                                       ->with("hoa_moi",$hoa_moi)
                                       ->with("count",$count)
                                        ->with("content",$content)
                                        ->with("total",$total)
                                        ->with("loai",$loai)
                                        ->with("ten",$ten)
                                        ->with("ds_hoa_search",$ds_hoa_search)
                                        ->with("auto_search",$auto_search);                                    
   }







   function logout(){
       Session::forget("name");
       return redirect()->route('index');
   }


   function hien_thi_regis_store(dang_ky $request){
       $name=Session::get("name");
       
       echo $request->get("email");

       $kq = DB::insert("INSERT INTO khach_hang(ma_khach_hang, ten_khach_hang, email, phai, mat_khau, dia_chi, dien_thoai, ghi_chu) VALUES(?,?,?,?,?,?,?,?)",
        [NULL,$request->get("ten_hien_thi"),$request->get("email"),$request->get("gioi_tinh"),md5($request->get("password")),
        $request->get("dia_chi"),$request->get("sdt"),$request->get("ghi_chu")]);

        if($kq)
        {
            
            return redirect()->route('login');   
        }
        else
        {
            echo "Có lỗi trong quá trình đăng ký";
        } 

   /* if($request->get('ten_dang_nhap_login')=='admin')
       {  
        Session::put("user","admin"); 
        return redirect()->route('index');
       }*/

   }


function hien_thi_checkout_regis_store(dang_ky $request){
       $name=Session::get("name");
       
       echo $request->get("email");

       $kq = DB::insert("INSERT INTO khach_hang(ma_khach_hang, ten_khach_hang, email, phai, mat_khau, dia_chi, dien_thoai, ghi_chu) VALUES(?,?,?,?,?,?,?,?)",
        [NULL,$request->get("ten_hien_thi"),$request->get("email"),$request->get("gioi_tinh"),md5($request->get("password")),
        $request->get("dia_chi"),$request->get("sdt"),$request->get("ghi_chu")]);

        if($kq)
        {
            
            return redirect()->route('ck_login');   
        }
        else
        {
            echo "Có lỗi trong quá trình đăng ký";
        } 

   /* if($request->get('ten_dang_nhap_login')=='admin')
       {  
        Session::put("user","admin"); 
        return redirect()->route('index');
       }*/

   }




   function hien_thi_login_store(dang_nhap $request){
       $name=Session::get("name");
       
      // echo $request->get("loginemail");

       $tai_khoan = DB::select("SELECT * FROM khach_hang WHERE email = ?",[$request->get("loginemail")]);
      
       if($tai_khoan)
       {
           //echo "<pre>",print_r($tai_khoan),"</pre>";
           foreach($tai_khoan as $tai)
           {
             //echo $tai->mat_khau;
            if(md5($request->get("loginpassword"))== ($tai->mat_khau))
            {
                //echo "Thành công";
                Session::put("name",$tai->ten_khach_hang);
                //echo $thong_tin_user=Session::get("name");
                return redirect()->route('index');
            }
            else
            {
                echo "Sai mật khẩu";
            }
           }
          
       }
       else
       { 
           echo "Thất bại";
       }
   /* if($request->get('ten_dang_nhap_login')=='admin')
       {  
        Session::put("user","admin"); 
        return redirect()->route('index');
       }*/

   }



function hien_thi_checkout_login_store(dang_nhap $request){
       $name=Session::get("name");
       
      // echo $request->get("loginemail");

       $tai_khoan = DB::select("SELECT * FROM khach_hang WHERE email = ?",[$request->get("loginemail")]);
      
       if($tai_khoan)
       {
           //echo "<pre>",print_r($tai_khoan),"</pre>";
           foreach($tai_khoan as $tai)
           {
             //echo $tai->mat_khau;
            if(md5($request->get("loginpassword"))== ($tai->mat_khau))
            {
                //echo "Thành công";
                Session::put("name",$tai->ten_khach_hang);
                Session::put("ma",$tai->ma_khach_hang);
                //echo $thong_tin_user=Session::get("name");
                return redirect()->route('checkout-address');
            }
            else
            {
                echo "Sai mật khẩu";
            }
           }
          
       }
       else
       { 
           echo "Thất bại";
       }
   /* if($request->get('ten_dang_nhap_login')=='admin')
       {  
        Session::put("user","admin"); 
        return redirect()->route('index');
       }*/

   }

public function muahang($method,$id){ 
    $product_buy=DB::table('hoa')->where('MaHoa',$id)->first();
    Cart::add(array('id'=>$id,'name'=>$product_buy->TenHoa,'qty'=>1,'price'=>$product_buy->Gia,'options'=>array('img'=>$product_buy->Hinh)));
    echo "<script>alert('Thêm vào giỏ hàng thành công')</script>";
    if($method=="single")
    {
        echo "<script>window.location='single-product-'+$id+'.html'</script>";
    }
    else if($method=="product")
    {
        echo "<script>window.location='product.html'</script>";
    }
    else if($method=="search")
    {

    }
    else
    {
        echo "<script>window.location='.'</script>";
    }
    //return redirect()->route('index');
    
}

public function xoahang($id){
    Cart::remove($id);
    echo "<script>alert('Xóa sản phẩm thành công')</script>";
    echo "<script>window.location='cart.html'</script>";
}

public function capnhat (Request $request){
    if($request->ajax()){
       $id= $request->get('id');
       $qty= $request->get('qty');
       Cart::update($id,$qty);
       echo "Oke";
    }
}

 function hien_thi_cart(){
       $name=Session::get("name");
        $ds_loai= DB::table("loai_hoa")->get();
        $ds_tt= DB::table("loai_tin")->get();
        $count=Cart::count();
        $content=Cart::content();
        $total=0;
        Session::put("gio_hang",$content);
         $auto_search=DB::table("hoa")->select("ThanhPhan")->get();

       return view("pages.cart")->with("name",$name)
                                ->with("ds_loai",$ds_loai)
                                ->with("ds_tt",$ds_tt)
                                ->with("content",$content)
                                ->with("total",$total)
                                ->with("count",$count)
                                ->with("auto_search",$auto_search); 
   }











    //chưa làm...
    
    
    
    
    public function thanh_toan_luu_hoa_don()
    {
        $ds_sp_gio_hang = Session::get("gio_hang");
        $name=Session::get("name");
        $m=DB::table("khach_hang")->select("ma_khach_hang")->where("ten_khach_hang",$name)->get();
        foreach($m as $ma)
        {
            $ma_khach_hang=$ma->ma_khach_hang; // mã khách hàng
        }
       // print_r($ds_sp_gio_hang);
        $tong_tien=0;
        foreach($ds_sp_gio_hang as $ds)
        {
            $tong_tien=$tong_tien+($ds->price*$ds->qty);
        }
       // echo $tong_tien;
        $ngay_hien_tai = date('Y-m-d H:i:s'); 
        if($ds_sp_gio_hang)
        {
            //them vao csdl hoa don
            
            $id_hoa_don = DB::table('hoa_don')->insertGetId(
                [
                    'ma_khach_hang' => $ma_khach_hang,                
                    'ngay_dat' => $ngay_hien_tai,
                    'tong_tien' => $tong_tien,
                ]
            );

            //thêm vào ct hóa đơn
            foreach($ds_sp_gio_hang as $ds_sp)
            {
                $ct_hd=DB::table('chi_tiet_hoa_don')->insert(
                [
                    'ma_hoa_don'=>$id_hoa_don,
                    'MaHoa'=> $ds_sp->id,
                    'so_luong'=>$ds_sp->qty,
                    'don_gia'=>$ds_sp->price,
                    'thanh_tien'=>$ds_sp->price*$ds_sp->qty
                ]);
            }
            //print_r($ds_sp_gio_hang);
            Cart::destroy();
            echo "<script>alert('Đặt hàng thành công')</script>";
            echo "<script>window.location='.'</script>";

        }
        else
        {
           echo "<script>alert('Đặt hàng thất bại')</script>";
            echo "<script>window.location='.'</script>";
        }
    }


    function hien_thi_lien_he(lien_he $request){    
        \Mail::send('pages.emails',
            array(
                'name' => $request->get('tieu_de'),
                'email' => $request->get('email'),
                'user_message' => $request->get('ContactMessage')
            ), function($message) use ($request)
            {
                $message->from($request->get('email'));
                $message->to('tutinh152@gmail.com', 'Admin')->subject('mail liên hệ');
            });
   }

}

