<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.min.js"></script>
</head>
<style>
    div{
        width: 100px;
        height: 10px;
        background-color: lavender;
    }
</style>
<body>
    <div>
        this is div
    </div>
    
    
    <script>
        $(document).ready(function () {
            $("div").click(function(){
               $(this).prepend("<div>Content</div>")
            })                 
        });
    </script>
</body>
</html>