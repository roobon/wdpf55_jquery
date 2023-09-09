<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="top-header">
        <nav class="navbar navbar-expand justify-content-between">
            <div class="btn btn-success">
                <a class="btn1" href="#">About</a>
            </div>
            <div class="btn btn-success">
                <a class="btn2" href="#">home</a>
            </div>
            <div class="btn btn-success">
                <a class="btn3" href="#">contact</a>
            </div>
            
        </nav>
        
    </div>
    <div id="box">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui suscipit deserunt earum sed impedit, architecto quis ab amet facere deleniti odit? Nam voluptas vel aut fugit recusandae fugiat, labore culpa?</div>
    
    <script>
        $(document).ready(function(){
            $(".btn1").click(function () {
                $("#box").load("about.html")
            })
            $(".btn2").click(function () {
                $("#box").load("home.php")
            })
            $(".btn3").click(function () {
                $("#box").load("contact.php")
            })
        })
    </script>
</body>
</html>