<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.min.js"></script>
</head>
<body>
    <ul>
        <li>Bangladesh</li>
        <li>India</li>
        <li>Pakistan</li>
    </ul>
    <ul>
        <li>Apple</li>
        <li>Mango</li>
        <li>Orange</li>
    </ul>
    <p>This is para 1</p>
    <p>This is para 2</p>
    <p>This is para 3</p>

    <script>
        $(document).ready(function () {
            var item = $("li").eq(2).html();
            // alert(item)
            var item = $("p").eq(2).css({"color":"red","font-size":"30px"});
            $("li:first-child").css({"color":"blue","font-size":"20px"})
            $("li:last-child").css({"color":"orange","font-size":"15px"})
            
        });
    </script>
</body>
</html>