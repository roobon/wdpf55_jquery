<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Login</title>
    <style>
        .success{
            padding: 20px;
            color: green;
        }
        .failed{
            padding: 20px;
            color: red;
        }
    </style>
</head>
<body>
    <h2>Login Form</h2>
    <div class="message"></div>
    <form action="" method="post">
        <input type="email" name="email" id="email" placeholder="Enter email"><br><br>
        <input type="password" name="password" id="password" placeholder="Enter password"><br><br>
        <input type="button" id="btn" value="Login">
    </form>

    <script>
        $(function () {
            
            $("#btn").click(function(){
                // alert($("#email").val());
                var email = $("[name='email']").val();
                var password = $("[name='password']").val();

                $.post("login.php", {e:email, p:password},function(data,status){
                    $(".message").html(data)
                });

            })

        });
    </script>
</body>
</html>