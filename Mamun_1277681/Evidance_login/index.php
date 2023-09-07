<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        .success{
            color:blue;
        
        }
        .fail{
            color: red;
        }
    </style>
</head>
<body>
    <h3>Login Form</h3>
    <div class="message"></div>
    <form action="" method="post" id="myform">
        <input type="email" name="email" id="email" placeholder="Enter Email"> <br>
        <input type="password" name="password" id="password" placeholder="Enter Password"> <br>
        <button type="button" id="loginbutton">Login</button>
    </form>
    <script>
        $(function(){
            $("#loginbutton").click(function(){
                // var email = $("#email").val();
                var email = $("[name='email']").val();
                var password = $("[name='password']").val();
                $.post("login.php", {Email: email, Password: password}, function(data, status) {
                    $(".message").html(data);
                });
            });
        });
    </script>
</body>
</html>
