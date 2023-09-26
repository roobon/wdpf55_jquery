<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
    .div{
        background-color:darkslateblue;
        width: 300px;
        height: 200px;
        color: white;
    }
    .feture{
        background-color:cyan;
        color:green;

    }
</style>
</head>
<body>
    <nav class="navbar navbar-expand justify-content-between ">
        <div class="btn btn-success">
            <a class="btn1" href="#">content page</a>
        </div>
        <div class="btn btn-success">
            <a class="btn2" href="#">About page</a>
        </div class="btn btn-success" >
        <div class="btn btn-success">
            <a class="btn3" href="#">Home page</a>
        </div>
    </nav>
    <div id="box"></div>
  
    <script>
        $(document).ready(function(){
            $(".btn1").click(function(){
                $("#box").load("content.php");
                $("#box").addClass("div")
            })
            $(".btn2").click(function(){
                $("#box").load("home.php");
            })
            $(".btn3").click(function(){
                $("#box").load("about.php");
                $("#box").addClass("div")
            })
        })
    </script>
</body>
</html>