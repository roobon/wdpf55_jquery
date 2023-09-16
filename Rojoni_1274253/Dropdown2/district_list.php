<?php 
 $server_name= "localhost";
 $user_name= "root";
 $password= "";
 $database_name= "division_district";
 
 $db= new mysqli($server_name , $user_name , $password , $database_name); 

 $id = $_POST['abc'];
 $result = $db->query("SELECT * FROM district WHERE divid ='$id'");
 if($result->num_rows>0){?>
 <select name="" id="">
    <option value="">select one</option>
 <?php while($row = $result->fetch_assoc()):?>
    <option value=""<?php echo $row ['divid']?>><?php echo $row ['name']?></option>
    <?php endwhile;
}?>
 </select>

 

 
  







 