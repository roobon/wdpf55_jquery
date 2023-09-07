<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h2>Login Form</h2>
    <div class="message"></div>
    <form action="" method="post" id="myform">
        <input type="email" name="email" id= "email" placeholder="Enter your email"> <br>
        <input type="password" name="password" id="password" placeholder="Enter your password"><br>
        <button type="button" id="btnLogin">Login</button>
    </form>

    <script>
        $(document).ready(function(){
            $("#btnLogin").click(function(){
                //alert($("#email").val());
                //alert($("[name='email']").val())
                var email = $("[name='email']").val()
                var password = $("[name='password']").val()

                $.post("login.php", {e:email, p:password}, function(data, status){
                    $(".message").html(data);
                })
            })
        })
    </script>
</body>
</html>