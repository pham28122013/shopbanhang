$(document).ready(function (){
    $(".updatecart").click(function (){
        var rowid = $(this).attr('id');
        var quantity =$(this).parent().parent().find(".quantity").val();
        var token = $("input[name='_token']").val();    
        var me = $(this);
        $.ajax({
              url:'/updategiohang/'+rowid+'/'+quantity,
              type:'GET',
              cache:false,
              data:{},
              success: function(data){
                  if(data){
                    var product_price = data.price * data.quantity;
                    // var product_total
                    $(".product_price_"+ rowid).html(product_price)
                    // $(".product_total").html(product_total)
                  }
              }
        });
    });
});