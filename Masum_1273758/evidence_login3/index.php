<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>
    <h1>Login Form</h1>
    <form action="">
        <input type="text" name="email" id="email" placeholder="Enter Your Email"><br><br>
        <input type="password" name="password" id="password" placeholder="Enter Your Password"><br><br>
        <input type="button" id="LoginId" value="Login"><br><br>
    </form>
    <div class="showdata"></div>
    <script>
        $(document).ready(function(){
            $("#LoginId").click(function(){
                // alert($("password").val());
             var email = $("[name='email']").val();
             var password = $("[name='password']").val();
             $.post("login.php",{e:email,p:password}, function(data,status){
                $(".showdata").html(data);
             })
            })
        })
    </script>
</body>
</html>