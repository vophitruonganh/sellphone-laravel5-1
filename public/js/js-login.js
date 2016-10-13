/*============================== Login Manager ==============================*/
$(function(){
    $("#btnLoginAdmin").click(function(){
        var username =  $("#username").val();
        var password = $("#password").val();

            var dataString = 'dashboard/user/login/'+username+'/'+password;
            var agrs = {
                url : dataString,
                type : "post",
                cache: false,
                data: dataString ,
                success : function(response){
                    switch(response.trim()){
                        case "admin":
                             window.location.href = "/dashboard/"+response;
                            $("#btnLoginAdmin").html('Signing ...');
                            // setTimeout(' window.location.href = "admin',100);
                        break;
                        case "member":
                            $("#result_login").html(response).show();
                        break;
                        default:
                            $("#result_login").addClass('label label-danger')
                            $("#result_login").html(response).show();
                        break;
                    }
                }
            };


        $.ajax(agrs);
    })
});