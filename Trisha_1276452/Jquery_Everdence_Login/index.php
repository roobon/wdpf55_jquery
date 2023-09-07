<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
</head>
<body>
    <h2> Login Form</h2>
    <div class="massage"></div>
    <form action="">
        <input type="email" name="email" placeholder="Enter email"> <br>
        <input type="password" name="password" placeholder="Enter password"> <br>
        <button type="button" id="btnlogin">Login</button>
    </form>

    <script>
        $(document).ready(function(){
            $("#btnlogin").click(function(){
                // alert($("email").val());

                var email =$("[name= 'email']").val();
                var password =$("[name= 'password']").val();

                $.post("login.php",{email:email,password:password}, function(data,status){
                    $(".massage").html(data);
                })
                
            });
        });
    </script>
</body>
</html>