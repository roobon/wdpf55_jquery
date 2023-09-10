<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.min.js"></script>
    <style>
        div{
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam officia tempora nostrum tempore fuga eligendi ducimus. Facere consectetur debitis deserunt consequuntur ipsa totam ipsam ut quam accusamus numquam, laborum architecto?
    </div>
    
    
    <script>
        $(document).ready(function () {
            $("div").hover(function(){
                $("div").replaceWith("<h1>Replace by</h1>")
            })                 
        });
    </script>
</body>
</html>