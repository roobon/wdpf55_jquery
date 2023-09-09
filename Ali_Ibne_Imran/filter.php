<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.min.js"></script>
    <style>
        .feature{
            font-size: 20px;
            color: orange;
        }
    </style>
</head>
<body>
    <ul>
        <li class="top">Bangladesh</li>
        <li class="top">Nepal</li>
        <li class="middle">India</li>
        <li class="middle">Bhutan</li>
        <li class="bottom">Pakistan</li>
        <li class="bottom">Maldips</li>
    </ul>
    <button class="btn1">Click 1</button>
    <button class="btn2">Click 1</button>
    <button class="btn3">Click 3</button>
    <button class="btn4">Click 4</button>
    
    <script>
        $(document).ready(function () {
            $("li").filter(".middle").addClass("feature")
            $("button").filter(".btn1").html("content")
            
        });
    </script>
</body>
</html>