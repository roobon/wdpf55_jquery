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
    <div id="article">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur voluptatem, impedit provident voluptates vitae nesciunt pariatur nam illo quidem laborum libero error, corrupti veritatis assumenda. Et error nisi unde accusantium?
    </div>
    <script>
        $(document).ready(function () {
            $("#article").addClass("feature")
            
        });
    </script>
</body>
</html>