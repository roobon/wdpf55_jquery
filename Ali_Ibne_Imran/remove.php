<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.min.js"></script>
</head>
<body>
    <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum, non. Placeat magnam tempora accusamus dolor nulla ullam debitis, assumenda dolore. Dolores eaque culpa similique unde voluptas vero corrupti. Ullam, cupiditate!
    </div>
    <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum, non. Placeat magnam tempora accusamus dolor nulla ullam debitis, assumenda dolore. Dolores eaque culpa similique unde voluptas vero corrupti. Ullam, cupiditate!
    </div>
    <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum, non. Placeat magnam tempora accusamus dolor nulla ullam debitis, assumenda dolore. Dolores eaque culpa similique unde voluptas vero corrupti. Ullam, cupiditate!
    </div>
    
    <script>
        $(document).ready(function () {
            $("div").click(function(){
               $(this).empty()
            })                 
        });
    </script>
</body>
</html>