<?php 
     $db= new mysqli("localhost" , "root" , "" , "bangladesh"); 
      
     $id = $_POST["id"];
     $result = $db->query("SELECT * FROM district WHERE div_id = '$id'");
     if($result->num_rows>0):?>
     <select name="" id="">
     <option value="">Select One</option>
          <?php while($row = $result->fetch_assoc()):?>
               <option value="<?php echo $row["id"]?>"><?php echo $row["name"]?></option>
          <?php endwhile;?>
     </select>
     
     <?php endif ?>