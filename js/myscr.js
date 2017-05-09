$(document).ready(function(){
    $(".updated").click(function(){
        var rowid= $(this).attr('id');
        var qty= $(this).parent().parent().parent().find(".qty").val();
        var token= $("input[name='_token']").val();
            $.ajax({
                url:'cap-nhat/'+rowid+'/'+qty,
                type:'GET',
                cache:false,
                data:{"_token":token,"id":rowid,"qty":qty},
                success:function (data) {
                    if (data=="Oke"){
                        alert("Cập nhật thành công");
                        window.location="cart.html";
                    }
                }
            });
    });

});