<!DOCTYPE html>

<html>


<body>
    
<center>
<h2>Contact</h2>

<form action="./contact" method="POST">
  <label for="fname">Phone:</label><br>
  <input type="text" id="Phone" name="Phone" value=" <?php echo $d1["Phone"]?>"readonly><br>
  <label for="lname">Email:</label><br>
  <input type="text" id="email" name="email" value="<?php echo $d1["Email"]?>"readonly><br><br>
  <label for="lname">website:</label><br>
  <input type="text" id="website" name="website" value="<?php echo $d1["website"]?>"readonly><br><br>
 
</form> 
</center>

</body>
</html>