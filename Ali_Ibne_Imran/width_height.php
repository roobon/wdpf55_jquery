<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.min.js"></script>
    <style>
        div{
            width: 100px;
            height: 100px;
            float: left;
            background-color: blue;
            margin: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>D</div>
    <div>D</div>
    <div>D</div>
    
    
    <script>
        $(document).ready(function () {
            $("div:first").height("150px").width("70px")
            
            
        });
    </script>
</body>
</html>