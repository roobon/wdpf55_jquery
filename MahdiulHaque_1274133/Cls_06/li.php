<!DOCTYPE html>
<html>
<head>
<style>
.descendants * { 
  display: block;
  border: 2px solid lightgrey;
  color: lightgrey;
  padding: 5px;
  margin: 15px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("ul").children().css({"color": "red", "border": "2px solid red"});
});
</script>
</head>

<body>
  <div>
    <ul> 
      <li>
        <span>span (grandchild)</span>
      </li>
    </ul>   
  </div>
</body>

</html>

<!-- sirer ta dekhte hbe -->