<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../jquery_3.6.4_jquery.min.js"></script>
    <style>
        .success {
            color: green;
            padding: 20px;
        }
        .fail {
            color: red;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login Form</h2>
        <div class="message"></div>
        <form action="">
            <label for="">E-mail Address</label><br>
            <input type="email" class="email" id="email" name="email" placeholder="Enter email"><br>
            <label for="">Password</label><br>
            <input type="password" class="pass" name="password" placeholder="Enter Your Password"><br>

            <button type="button" id="btnlogin">Login</button>
        </form>
    </div>
    <script>
        $(document).ready(function(){
            $("#btnlogin").click(function(){
                // var email = $(".email").val();
                // var pass = $(".pass").val();
                //alert($("#email").val());
                // alert(email);
                var email = $("[name='email']").val();
                var password = $("[name='password']").val();
                $.post("login.php",{e:email, p:password}, function(data,status){
                    $(".message").html(data);
                });
            });
        });
    </script>
</body>
</html>