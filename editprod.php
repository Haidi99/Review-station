<form method="post" action="">
    <input type="text" name="id">
    <input type="text" name="name"> 
    
    <input type="text" name="description">
    <input type="text" name="price">
    <input type="submit" name="submit" value="submet">
</form>
<?php
 
 include ('products.php');
 if(isset($_POST['submit'])){

  $c = new products();
  $c->editproduct();
 }

?>

