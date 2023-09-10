<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="jquery.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a class="page1" href="#">Home</a></li>
      <li><a class="page2" href="#">About</a></li>
      <li><a class="page3" href="#">Contact</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  
  <p class="content"></p>
</div>
<script>
    $(document).ready(function(){
        $(".page1").click(function(){
           $(".content").load("home.php")
        });
        $(".page2").click(function(){
           $(".content").load("about.php")
        });
        $(".page3").click(function(){
           $(".content").load("contact.php")
        });
    });
</script>

</body>
</html>
