<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <style>
        #container{
            width: 40%;
            margin: auto;
        }
        p{
            text-align: center;
            font-size: 25px;
            font-weight: bold;
        }
        .success{
            color: green;
        }
        .fail{
            color: red;
        }
    </style>
</head>
<body>
<div class="container mt-3" id="container">
    <div class="message"></div>
    <div class="card card-body">
        <form action="" method="" id="form">
            <div class="heading"><h4>Access Your Account</h4></div>
            <hr id="hr">
            <div class="form-group mb-3 mt-3">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-group mb-3 mt-3">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div> 
            <div class="form-group mb-3 mt-3">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Remember me
                </label>
                </div>
            </div>
            <div class="form-group mb-3 mt-3" id="button">
                <button type="button" class="btn btn-success btn-block" id="btn" name="login">Login</button>
            </div>
            <div class="form-group mb-3 mt-3" id="link">
                <label class="form-check-label" for="gridCheck">
                    New to Here ? <a href="">Create an account</a>
                </label>
            </div>
        </form>
        <script>
            $(document).ready(function(){
                $("#btn").click(function(){
                   //alert( $("#email").val())
                  var email = $("[name='email']").val()
                  var password = $("[name='password']").val()

                  $.post("login.php",{e:email,p:password},function(data,status){
                    $(".message").html(data)
                  })
                })
            }) 
        </script>
    </div>
</div>
</body>
</html>