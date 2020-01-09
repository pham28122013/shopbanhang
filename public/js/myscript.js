$(document).ready(function (){
    $(".updatecart").click(function (){
        var rowid = $(this).attr('id');
        var quantity =$(this).parent().parent().find(".quantity").val();
        var token = $("input[name='_token']").val();
        
        $.ajax({
          
              url:'/updategiohang/'+rowid+'/'+quantity,
              type:'GET',
              cache:false,
              data:{"_token":token,"id":rowid,"quantity":quantity},
              success:function(data){
                  if(data == "oke"){
                      alert("yes");
                  }
              }
        });
    });
});