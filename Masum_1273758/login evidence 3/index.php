<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>
<form action="">
    <input type="text" name="email" id="email" placeholder="Enter Your Email"><br><br>
    <input type="password" name="password" id="password" placeholder="Enter your Password"><br><br>
    <button type="button" id="btnLogin">Login</button>
</form>
<div class="Display"></div>
<script>
    $(document).ready(function(){
    $("#btnLogin").click(function(){
        // alert($("#email").val());
        var email = $("#email").val();
        var password = $("#password").val();
        $.post("login.php",{e:email,p:password},function(data,status){
            $(".Display").html(data);
        })
    })
    })
</script>
</body>
</html>