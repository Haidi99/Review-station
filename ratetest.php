<form method="post" action= ""> 
   Rate: <input type="text" name="mrate" required="">
  Product name:  <input type="text" name="Productname" required="" >
   <input type="submit" name="add" value="Rate">
</form>

<?php 
 session_start();
   if(isset($_POST['add']))
{
    include('rates.php'); 
    $a = new rates(); 
    $a->addrate(); 
}