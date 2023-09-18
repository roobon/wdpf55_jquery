<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>

<h1>Login form</h1>
<div class="massege"></div>
    <form action="" id="">
        <input type="email" name="email" placeholder="Enter your Email"> <br> <br>
        <input type="password" name="password" placeholder="Enter password">
        <button type="button" id="btnlogin">Login</button>

    </form>

    <script>
        $(document).ready (function(){
            $("#btnlogin").click(function(){
             var email =   $[name ='email'].val();
             var password =   $[name ='password'].val();

            $.post("login.php",{e:email, p:password}, function(data,status){
                $(".massege").html(data);
            })

            })
        })
    </script>
</body>
</html>