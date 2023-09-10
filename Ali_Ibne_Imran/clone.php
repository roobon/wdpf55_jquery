<!DOCTYPE html>  
<html>  
<head>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  

</head> 
    <style>
        .box{
            width: 100px;
            height: 100px;
            background-color: red;
            border: 1px solid black;
        }
    </style> 
<body>  
<div class="box">
    <div class="clone"></div>
</div> <br> 

<button class="btn1">Click here</button>  
<button class="btn2">Remove</button> 
<script>  
    $(document).ready(function(){  
        $(".btn1").click(function(){  
            $("div").clone().appendTo(".clone");  
        });
        $(".clone").click(function(){  
            $(this).remove();  
        });
    });  
</script>   
</body>  
</html>  
