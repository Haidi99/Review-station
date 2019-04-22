<form method="post">
    <input type="text" name="id">
    <input type="text" name="name">
    <input type="text" name="description">
    <input type="text" name="price">

    <input type="submit" name="add" value="add">
</form>
<?php
 
include ('products.php');

 if(isset($_POST['add'])){
  $c = new products();
  $c->Addproduct();
 }

?>