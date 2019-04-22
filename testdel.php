<form method="post" action="">

    <input type="text" name="name">
    <input type="submit" name="delete" value="delete">
</form>
<?php
 //session_start();
 include ('products.php');
 if(isset($_POST['delete']))
 {
  $c = new products();
  $c->deleteproduct();
 }

?>