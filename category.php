<?php
   include('database.php');
  // session_start();
   error_reporting(0);

   class Category{

      public function viewcategory(){
       $vdb= new database();
           
           $cout = $vdb->getdata('category',$data=array(' '),'c_id');
           $nout = $vdb->getdata('category',$data=array(' '),'name');
           $not  = $vdb->getdata('category',$data=array(' '),'num_of_item');
           $pout = $vdb->getdata('category',$data=array(' '),'p_id');
           while ($cid= mysqli_fetch_assoc($cout)){
             $names = mysqli_fetch_assoc($nout);
              $itemss = mysqli_fetch_assoc($not);
              $pid = mysqli_fetch_assoc($pout);
               
               
              $cids    = $cid['c_id'];
              $cname= $names['name'];
              $citem = $itemss['num_of_item'];
              $pids  = $pid['p_id']; 
 
          echo $cids . "<br>" . $cname . "<br>" .$citem . "<br>" . $pids;
       }}
     }
?>

