<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>
    <h2>Login From</h2>
<div class="message"></div>


    <form action=""  id="myform">
        <input type="email" name="email" id="email" placeholder="Enter email"><br>
        <input type="password" name="password" id="password" placeholder="Enter password"><br>
        <button type="button" id="btnLogin">Login</button>
    </form>
    <script>
            $(document).ready(function(){
                $("#btnLogin").click(function(){
                  //alert ($("#email").val()); //using id

                 var email =$("[name='email']").val(); //using name
                 var password =$("[name='password']").val();

                 $.post("login.php",{e:email,p:password} ,function(data,status){
                    $(".message").html(data);

                 })

                });


            });

    </script>
    
</body>
</html>