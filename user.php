

<?php
    include ('database.php');
    // $pattern = new database();
    // $pattern->
    // $pattern.get_connection();
  //  session_start();
    
    error_reporting(0);

class user{


 function signup(){
if(isset($_POST['submit'])){
    echo'ana dakhalt';

    $fname   =$_POST['fname'];
    $lname   =$_POST['lname'];                 
    $Email   =$_POST['Email'];
    $password=$_POST['password'];
    $_SESSION['mail']= $email;
    $_SESSION['password']= $password;
      $obj = new database();
                 $obj->AddData($data= array('f_name'=>$fname ,'l_name'=>$lname,'Email'=>$Email,'password'=>$password),
                 $column_name= array('f_name','l_name','Email','password'),'users');
             }
           
        
 }


 function updateAccount(){
if(isset($_POST['submit'])){
    echo'ana dakhalt';

    $fname   =$_POST['fname'];
    $lname   =$_POST['lname'];                 
    $Email   =$_POST['Email'];
    $password=$_POST['password'];
    $_SESSION['mail']= $email;
    $name =$_SESSION['mail'];
      $obj = new database();
     //$obj->update_data('users', $data=array( 'f_name' =>$fname, 'l_name'=>$lname), $where = array('Email'=>$name) );

     $obj->update_data('users', $data=array( 'f_name' => $fname, 'l_name' => $lname, 'password'=> $password), $where = array('Email'=> $Email) );
             }
                 
 }

function compare(){

    if(isset($_POST['go']))

    $adb=new database();
    $search1 = $_POST['search1'];
    $search2 = $_POST['search2'];

        $Fname= $sdb ->getdata('products',$data=array('p_name'=>$search1),'p_name');
        $Fdesc= $sdb ->getdata('products',$data=array('p_name'=>$search1),'p_description');
        $Fprice= $sdb ->getdata('products',$data=array('p_name'=>$search1),'p_price');

        while ($productN = mysqli_fetch_assoc($Fname)){
        $nams=  $productN['p_name'];
            
    } 
        echo "product name is:".$nams."<br>"; 
        
       while ($productD = mysqli_fetch_assoc($Fdesc)){
            $des=  $productD['p_description'];
    } 
        echo "product desceiprtion is:".$des."<br>"; 
       while ($productP = mysqli_fetch_assoc($Fprice)){
              $price=  $productP['p_price'];
            
    } 
         echo "product Price: " . $price."<br>";
     
    

}
}

/*public function search(){
        $sdb = new database();
        $Fname= $sdb ->getdata('products',$data=array('p_name'),'p_name');
        $Fdesc= $sdb ->getdata('products',$data=array('p_name'),'p_description');
        $Fprice= $sdb ->getdata('products',$data=array('p_name'),'p_price');
        
        while ($productN = mysqli_fetch_assoc($Fname)){
        $nams=  $productN['p_name'];
            
    } 
        echo "product name is:".$nams."<br>"; 
        
       while ($productD = mysqli_fetch_assoc($Fdesc)){
            $des=  $productD['p_description'];
    } 
        echo "product desceiprtion is:".$des."<br>"; 
       while ($productP = mysqli_fetch_assoc($Fprice)){
              $price=  $productP['p_price'];
            
    } 
         echo "product Price: " . $price."<br>";
     
    
    
}*/