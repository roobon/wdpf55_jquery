<?php 

$db = new mysqli("localhost", "root", "", "student_batches");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../jquery.min.js"></script>
    <title>Batches</title>
    <style>
        select, option {
            box-shadow: 100px 100px 20px 100px lightblue;
        }
    </style>
</head>

<body>
    <h3> Batch wise Students </h3>
    <form action="">
        <select id="batch_id">
            <option value="">select One</option>

            <?php 
            $sql = "SELECT * FROM batch_info" ;
            $result = $db->query($sql) ;
            
            while( $data = $result->fetch_assoc() ){
            ?>
            <option  value=" <?php echo $data['id']  ?> ">  <?php echo $data['name']  ?>  </option>
            <?php } ;?>
        </select>
    </form>

    <div id="student_list">  </div>  
</body>

<script>
    $(function () {
        $("#batch_id").change( function() {
             var batchId =  $("#batch_id").val() ;
            $.post("student_list.php", {id:batchId}, function(data, status) {
                $("#student_list").html(data);
            })
        })
    });
</script>
</html>