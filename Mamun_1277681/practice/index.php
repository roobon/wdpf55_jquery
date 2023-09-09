<!DOCTYPE html>
<html>
<head>
    <title>jQuery AJAX Page Navigation</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
   
    <button class="btn1">Load Content</button>
    <button class="btn2">Load Content</button>
    <div class="box">Contrent Here</div>
   
   <script>
    $(function () {
        $(".btn1").click(function () { 
            $(".box").load("about.html");
           
           
         })
        $(".btn2").click(function () { 
          
            $(".box").load("content.html");
           
         })
    });
   </script>
</body>
</html>
