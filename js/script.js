$(document).ready(function () {
    $('#login').click(function (){
        var username = $("#username").val();
        var password = $("#password").val();
        var dataString = 'username=' + username + '&password=' + password;
        if ($.trim(username).length > 0 && $.trim(password).length > 0){
            $("#error").text('');
            $.ajax({
                type: "POST",
                url: "ajaxLogin.php",
                data: dataString,
                cache: false,
                beforeSend: function () {
                    $("#login").val('Connecting...');
                },
                success: function (data) {
                    if (data==1){
                        $("body").load("home.php").hide().fadeIn(1500).delay(6000);
                        window.location.href = "home.php";
                        
                    } else{
                        $('#box').shake();
                        $("#login").val('Login')
                        $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username or password. ");
                    }
                }
            });

        }else{
            $("#error").text("Please enter valid username or password!").css('color','red');
        }
        return false;
    });

});