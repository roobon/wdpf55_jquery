<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.min.js"></script>

</head>
<body>
    <H2>Login Form</H2>
    <div class="message"></div>
    <form action="">
        <input type="text" name="email" id="email" placeholder="Enter your Email"><br><br>
        <input type="password" name="password" id="password" placeholder="Enter your password"><br><br>
        <button type="button" id="btnLogin">Login</button>
    </form>
    <script>
        $(document).ready(function(){
            $("#btnLogin").click(function(){
        // alert($("#email").val()) //id diye ae vabe krte hoy
                var email = $("[name='email']").val();
                var password = $("[name='password']").val();
                $.post("login.php",{e:email,p:password},function(data,status){
                    $(".message").html(data);
                })
            })
        })
    </script>
</body>
</html>