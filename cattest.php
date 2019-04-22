<form method="post"> 

       <input type="text" name="name">
       <input type="submit" name="see category" value="see category">
     </form>

     <?php session_start();
     echo "yasmeen";
      include('category.php');
     if(isset($_POST['see category']))
  { 
    $a = new Category(); 
    $a->viewcategory(); 
  }

?>