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
                    window.location = "listgiohang"
                  }
              }
        });
    });
});