<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
    <h1>Login</h1>
    <div class="message"></div>
    <form action="" method="post" id="loginForm">
        <input type="email" name="email" id="email"><br>
        <input type="password" name="password" id="password"><br>
        <button type="button" id="btn">Submit</button>
    </form>
    <script>
        $(document).ready(function() {
            $("#btn").click(function() {
                var email = $("[name='email']").val();
                var password = $("[name='password']").val();
                $.post("server_script.php", {
                    e: email,
                    p: password
                }, function(data, status) {
                    $(".message").html(data);
                })
            });
        });
    </script>
</body>

</html>