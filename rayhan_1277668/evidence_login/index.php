<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="../jquery.min.js"></script>
    <title>Index</title>

</head>
<body>
    <h2>Login form</h2>
    <div class="message"></div>

    <form action="">
        <input type="email" class="email" name="email" placeholder="Enter Email"> <br>
        <input type="password"  class="pass" name="password" placeholder="Enter Password"> <br>
        <button type="button"> LOGIN  </button>
    </form>

    <script>
        $(function () {
            $("button").click(function(){
                // var email =   $(".email").val() ;
                // var pass =   $(".pass").val() ;
                // alert( ` Email: ${email}
                //     Password: ${pass}` )
                var email = $( "[name='email']" ).val();
                var pass = $( "[name='password']" ).val();
                $.post( "login.php", {e:email, p:pass}  , function(data , status) {
                    $(".message").html(data)
                });
            })
        });
    </script>
</body>
</html>