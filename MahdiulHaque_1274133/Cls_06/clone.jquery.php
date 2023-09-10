<!DOCTYPE html>
<html>
<head> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("p").clone().appendTo("body");
  });
});
</script>
 <style>
    div{
        width: 150px;
        background-color: aqua;
    }
 </style>
</head>
<body>
  <div>
  <p>This is a paragraph.</p>
  <p>This is another paragraph.</p>
  </div>


 <button>Clone all p elements, and append them to the body element</button>

</body>
</html>
