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
    <div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis at provident non cum architecto<span>Nothing Else</span> accusamus earum debitis quo. Non ullam dolorum fugit debitis natus cumque in atque eligendi aliquam! Delectus!</p>
        <p>Lorem ipsum dolor sit amet consectetur <span>Nothing Else</span>adipisicing elit. Perferendis at provident non cum architecto accusamus earum debitis quo. Non ullam dolorum fugit debitis natus cumque in atque eligendi aliquam! Delectus!</p>
        <span>Something Else</span>
    </div>
    
    <script>
        $(document).ready(function () {
            $("p").find("span").addClass("feature")
            
            
        });
    </script>
</body>
</html>