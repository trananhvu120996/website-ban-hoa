<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get("theo-dieu-kien/{id}", function($id){
    echo $id;
})->where('id','[0-9]+');

Route::get('/add_to_cart', 'product_controller@add_to_cart');
                                          //template                                      
//trang chủ
Route::get('/',['as'=>'index','uses'=>'template_controller@hien_thi_trang_chu']);

//news
Route::get('news.html','template_controller@hien_thi_news');

//single news
Route::get('single-news-{ma}.html','template_controller@hien_thi_single_news');

//about
Route::get('about.html','template_controller@hien_thi_about');

//card
Route::get('cart.html',['as'=>'cart','uses'=>'template_controller@hien_thi_cart']);

//contact
Route::get('contact.html','template_controller@hien_thi_contact');

//checkout
Route::get('checkout.html','template_controller@hien_thi_checkout');

//checkout address
Route::get('checkout-address.html',['as'=>'checkout-address','uses'=>'template_controller@hien_thi_checkout_address']);

//checkout registration
Route::get('checkout-regis.html','template_controller@hien_thi_checkout_regis');

//checkout signin
Route::get('checkout-signin.html',['as'=>'ck_login','uses'=>'template_controller@hien_thi_checkout_signin']);

//my account
Route::get('my-account.html','template_controller@hien_thi_my_account');

//create
Route::get('regis.html',['as'=>'regis','uses'=>'template_controller@hien_thi_regis']);

//login
Route::get('login.html',['as'=>'login','uses'=>'template_controller@hien_thi_login']);

//product
Route::get('product.html','template_controller@hien_thi_product');

//single product
Route::get('single-product-{id}.html','template_controller@hien_thi_single_product');

//single product
Route::get('search-product-{loai}.html','template_controller@hien_thi_search_product');


//Route::get('san-pham/{id}-{alias}','template_controller@chi_tiet_san_pham');

Route::get('logout',[
    'as'=>'dang_xuat','uses'=>'template_controller@logout']);



//addtocart
Route::get('mua-hang-{method}-{id}',['as'=>'muahang','uses'=>'template_controller@muahang']);
//xóa
Route::get('xoa-hang-{id}',['as'=>'xoahang','uses'=>'template_controller@xoahang']);
//cap nhat
Route::get('cap-nhat/{id}/{qty}',['as'=>'capnhat','uses'=>'template_controller@capnhat']);
//thanh toán
Route::get('thanh-toan',['as'=>'thanhtoan','uses'=>'template_controller@thanh_toan_luu_hoa_don']);



//post
Route::post("contact",[
    "as"=>"post_contact",
    "uses"=>"template_controller@hien_thi_lien_he"
]);

Route::post("regis",[
    "as"=>"post_regis",
    "uses"=>"template_controller@hien_thi_regis_store"
]);

Route::post("checkout-regis",[
    "as"=>"post_checkout_regis",
    "uses"=>"template_controller@hien_thi_checkout_regis_store"
]);



Route::post("login",[
    "as"=>"post_login",
    "uses"=>"template_controller@hien_thi_login_store"
]);



Route::post("checkout-login",[
    "as"=>"post_checkout_login",
    "uses"=>"template_controller@hien_thi_checkout_login_store"
]);




Route::post("logout",[
    "as"=>"post_logout",
    "uses"=>"template_controller@logout"
]);

Route::post("search",[
    "as"=>"post_search",
    "uses"=>"template_controller@hien_thi_search"
]);




//tintuc

//trang chủ
Route::get('tintuc.html',['as'=>'tintuc','uses'=>'tintuc_controller@hien_thi_trang_chu']);

Route::group(['prefix' => 'tintuc'], function() {
Route::get('/single-{idTin}','tintuc_controller@hien_thi_single');

Route::get('/loai-{idTL}','tintuc_controller@hien_thi_danhmuc');
});







//admin
Route::get('ad',['as'=>'ad','uses'=>'admin_controller@hien_thi_ad']);

Route::group(['prefix' => 'ad'], function() {
    Route::get('/login',['as'=>'login','uses'=>'admin_controller@hien_thi_login']);
    Route::get('/ds_hoadon',['as'=> 'ds_hd','uses'=> 'admin_controller@hien_thi_ds_hoadon']);
    Route::get('/ds_loaisanpham',['as'=>'ds_lsp','uses'=>'admin_controller@hien_thi_ds_loaisanpham']);
    Route::get('/ds_sanpham',['as'=>'ds_sp','uses'=>'admin_controller@hien_thi_ds_sanpham']);
    Route::get('/ds_tintuc',['as'=>'ds_tt','uses'=>'admin_controller@hien_thi_ds_tintuc']);
    Route::get('/ds_tin',['as'=>'ds_t','uses'=>'admin_controller@hien_thi_ds_tin']);
    Route::get('/ds_user',['as'=>'ds_us','uses'=>'admin_controller@hien_thi_ds_user']);
    Route::get('/them_loaisanpham',['as'=>'t_lsp','uses'=>'admin_controller@hien_thi_them_loaisanpham']);
    Route::get('/them_sanpham',['as'=>'t_sp','uses'=>'admin_controller@hien_thi_them_sanpham']);
    Route::get('/them_tintuc',['as'=>'t_tt','uses'=>'admin_controller@hien_thi_them_tintuc']);
    Route::get('/them_tin',['as'=>'t_tt','uses'=>'admin_controller@hien_thi_them_tin']);
    Route::get('/them_user',['as'=>'t_us','uses'=>'admin_controller@hien_thi_them_user']);

Route::post('ad',
    ['as' => 'post_admin', 'uses' => 'admin_controller@dang_nhap_check']);

Route::get('/ad_logout', ['as'=>'ad_lo','uses'=>'admin_controller@dang_xuat']);

Route::get('/ds_chude',['as'=>'ds_cd','uses'=>'admin_controller@hien_thi_ds_chude']);

Route::get('/ds_khachhang',['as'=>'ds_kh','uses'=>'admin_controller@hien_thi_ds_khachhang']);




    Route::get("/xoa-san-pham/{id}" ,"admin_controller@xoa_san_pham");
    Route::get("/xoa-chu-de/{id}" ,"admin_controller@xoa_chu_de");
    Route::get("/xoa-hoa-don/{id}" ,"admin_controller@xoa_hoa_don");
    Route::get("/xoa-khach-hang/{id}" ,"admin_controller@xoa_khach_hang");
    Route::get("/xoa-loai-san-pham/{id}" ,"admin_controller@xoa_loai_san_pham");
    Route::get("/xoa-tin-tuc/{id}" ,"admin_controller@xoa_tin_tuc");
    Route::get("/xoa-tin/{id}" ,"admin_controller@xoa_tin");
    Route::get("/xoa-user/{id}" ,"admin_controller@xoa_user");


    Route::get("/cap-nhat-san-pham/{id}", "admin_controller@cap_nhat_san_pham");
    
    Route::post("/cap-nhat-san-pham", 
    [ 
        "as" => "post_cap_nhat_san_pham", 
        "uses" => "admin_controller@cap_nhat_san_pham_store"
    ]);


    Route::get("/cap-nhat-tin-tuc/{id}", "admin_controller@cap_nhat_tin_tuc");
    Route::post("/cap-nhat-tin-tuc", 
    [ 
        "as" => "post_cap_nhat_tin_tuc", 
        "uses" => "admin_controller@cap_nhat_tin_tuc_store"
    ]);

    Route::get("/cap-nhat-tin/{id}", "admin_controller@cap_nhat_tin");
    Route::post("/cap-nhat-tin", 
    [ 
        "as" => "post_cap_nhat_tin", 
        "uses" => "admin_controller@cap_nhat_tin_store"
    ]);

    Route::get("/cap-nhat-chu-de/{id}", "admin_controller@cap_nhat_chu_de");
    Route::post("/cap-nhat-chu-de", 
    [ 
        "as" => "post_cap_nhat_chu_de", 
        "uses" => "admin_controller@cap_nhat_chu_de_store"
    ]);
    Route::get("/cap-nhat-khach-hang/{id}", "admin_controller@cap_nhat_khach_hang");
    Route::post("/cap-nhat-khach-hang", 
    [ 
        "as" => "post_cap_nhat_khach_hang", 
        "uses" => "admin_controller@cap_nhat_khach_hang_store"
    ]);
    Route::get("/cap-nhat-loai-san-pham/{id}", "admin_controller@cap_nhat_loai_san_pham");
    Route::get("/cap-nhat-hoa-don/{id}", "admin_controller@cap_nhat_hoa_don");
    Route::post("/cap-nhat-loai-san-pham", 
    [ 
        "as" => "post_cap_nhat_loai_san_pham", 
        "uses" => "admin_controller@cap_nhat_loai_san_pham_store"
    ]);
    
    Route::get("/cap-nhat-hoa-don/{id}", "admin_controller@cap_nhat_hoa_don");
    Route::post("/cap-nhat-hoa-don", 
    [ 
        "as" => "post_cap_nhat_hoa_don", 
        "uses" => "admin_controller@cap_nhat_hoa_don_store"
    ]);
    Route::get("/cap-nhat-user/{id}", "admin_controller@cap_nhat_user");
    Route::post("/cap-nhat-user", 
    [ 
        "as" => "post_cap_nhat_user", 
        "uses" => "admin_controller@cap_nhat_user_store"
    ]);
    
    Route::get('/them_khachhang',['as'=>'t_kh','uses'=>'admin_controller@hien_thi_them_khachhang']);
    Route::get('/them_chude',['as'=>'t_cd','uses'=>'admin_controller@hien_thi_them_chude']);
    Route::post('/them-chu-de',
    [
            "as"=>"post_them_chu_de",
            "uses"=> "admin_controller@them_chu_de"

    ]);
    Route::post('/them-loai-san-pham',
    [
        "as"=>"post_them_loai_san_pham",
        "uses"=>"admin_controller@them_loai_san_pham"
    ]);
  
    Route::post('/them-khach-hang',
    [
        "as"=>"post_them_khach_hang",
        "uses"=>"admin_controller@them_khach_hang"
    ]);
    Route::post('/them-san-pham',
    [
        "as"=>"post_them_san_pham",
        "uses"=>"admin_controller@them_san_pham"
    ]);
    Route::post('/them-tin-tuc',
    [
        "as"=>"post_them_tin_tuc",
        "uses"=>"admin_controller@them_tin_tuc"
    ]);

    Route::post('/them-tin',
    [
        "as"=>"post_them_tin",
        "uses"=>"admin_controller@them_tin"
    ]);
    Route::post('/them-user',
    [
        "as"=>"post_them_user",
        "uses"=>"admin_controller@them_user"
    ]);

   

  
       Route::post('/sua-hoa-don',
    [
        'as'=>'post-sua-hoa-don',
        'uses'=>'admin_controller@sua_hoa_don'
    ]);




     Route::get('/hien-thi-ct-{id}','admin_controller@hien_thi_ct_hoadon');

});






