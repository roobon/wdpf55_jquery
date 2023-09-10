<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
    .highlight{
    font-size: 25px;
    color: blue;
    }
</style>
</head>
<body>
    <div id="">Some thing of List</div>
   <div>
    <ul>
        <li class="top">list item 1</li>
        <li class="top">list item 2</li>
        <li class="middle">list item 3</li>
        <li class="middle">list item 4</li>
        <li class="bottom">list item 5</li>
        <li class="bottom">list item 6</li>
       
    </ul>
    <button class="btn1">button 1</button>
    <button class="btn2">button 2</button>
    <button class="btn3">button 3</button>
    <button class="btn4">button 4</button>
    <button class="btn5">button 5</button>
   </div> 
   <script>
    $(function(){
        $("li").filter(".bottom").addClass("highlight");
        $("li").filter(".top").addClass("highlight");
        $("button").filter(".btn1").html("New-level")

    })
   </script>
</body>
</html>