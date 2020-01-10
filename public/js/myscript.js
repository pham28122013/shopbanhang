$(document).ready(function (){
    $(".updatecart").click(function (){
        var rowid = $(this).attr('id');
        var quantity =$(this).parent().parent().find(".quantity").val();
        var token = $("input[name='_token']").val();    
           console.log('/updategiohang/'+rowid+'/'+quantity)   ;  
        $.ajax({
              url:'/updategiohang/'+rowid+'/'+quantity,
              type:'GET',
              cache:false,
              data:{},
            //   data:{"_token":token,"id":rowid,"quantity":quantity},
            //   dataType: 'json',

              success: function(data){
                //   console.log(data)
                  if(data == "ok"){
                    //   alert("yes");
                      window.location = "listgiohang"
                  }
              }
        });
    });
});