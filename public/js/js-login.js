
$(function(){
    $("#btnLogin").click(function(){
        var username =  $("#username").val();
        var password = $("#password").val();
        if(username == "" || password == ""){
            alert("Tên đăng nhập hoặc mật khẩu còn trống");
        }
        var dataString = '/user/login/'+username+'/'+password;
        var agrs = {    
            url : dataString,
            type : "post",
            cache: false,
            data: dataString ,
            success : function(html){
                $("#menuLogin").hide();
                $("#result_login").html(html).show();
            },
        };

        $.ajax(agrs);
    })
});
