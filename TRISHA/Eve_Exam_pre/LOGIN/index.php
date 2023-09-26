<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <style>
        .success {
            color:green;
            padding: 30px;
        }

        .fail {
            color:red;
            padding: 30px;
        }
    </style>
</head>
<body>
    <h2>Login Form</h2>
    <div class="message"></div>
    
    <form action="" id="myform">
        <input type="email" name="email" id="email" placeholder="Enter email"><br>
        <input type="password" name="password" id="password" placeholder="Enter password"><br>
        <button type="button" id="btnLogin">Login</button>
    </form>
    
    <script>
        $(document).ready(function () {
            $("#btnLogin").click(function(){
                //alert($("#email").val());
               var email = $("[name='email']").val();
               var password = $("[name='password']").val();

               $.post("login.php",{e:email, p:password} , function(data, status){
                    $(".message").html(data);
               });

            })
        });
    </script>
   
</body>
</html>