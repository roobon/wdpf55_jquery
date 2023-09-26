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
        <input type="email" name="email" id="email" placeholder="Enter your Email"><br><br>
        <input type="password" name="password" id="password" placeholder="Enter your Password"><br><br>
        <button type="button" id="btnLogin">Login</button>
    </form>
    <div class="message"></div>
    <script>
          $(document).ready(function(){
            $("#btnLogin").click(function(){
        // alert($("#email").val())
        var email = $("[name='email']").val();
        var password = $("[name='password']").val();
        $.post("Login.php", {e:email,p:password},function(data,status){
            $(".message").html(data);
        })
            });
        });
    </script>
</body>
</html>