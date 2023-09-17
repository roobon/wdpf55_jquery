<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        .success{
            color: black;
        } 

        .fail {
            color: blueviolet;
        }
    </style>
</head>
<body>
    <h2>Login Form</h2>
    <div class="message"></div>
    <form action="">
        <input type="email" name="email" id="email" placeholder="Enter Your Email"><br>
        <input type="password" name="password" id="password" placeholder="Enter Your Password"><br>
        <button type="button" id="btnLogin">Login</button>

    </form>

    <script>
        $(document).ready(function (){
            $("#btnLogin").click(function(){
                var email = $("[name = 'email']").val();
                var password = $("[name = 'password']").val();

              $.post("login.php",{e:email, p:password} , function(data, status){
             $(".message").html(data);
            });  
            
        })
        })
    </script>
</body>
</html>