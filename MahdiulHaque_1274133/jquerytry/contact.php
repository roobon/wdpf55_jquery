<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>
   <div id="box">
      <h2>
        jfjdkfjdkfjdskfjdkfjdf
      </h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores eos beatae voluptatem praesentium commodi officiis perferendis aut voluptate temporibus non, distinctio nostrum, voluptates modi, inventore esse eaque odio placeat doloribus.
        Phone NO 0125454541
      </p>
      <div class="container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
      
   </div>

   <button type="button">Load Content</button>

</body>
</html>