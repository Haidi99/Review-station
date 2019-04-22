<?php
require_once 'database.php';
$DB =new database("localhost","root","","Productreview");

//Search in DB
         /*$result= $DB->search_in_db('products', $data= array('p_id'=> 1 ), '*');
         if($result){
          
           echo 'yesssssssssssss';        }
            if($result==0) {
                 
            echo 'noooooooooooo';
               }*/
// GET DATAA IN DB 
                 /*getdata test */       
   /* $record = $DB->getdata('Products', $d = array ('p_id' => '5'),'p_name');
      

    while (   $re= mysqli_fetch_assoc($record) )
     
       echo $re['p_name'];*/

 //////////////Update////////////////////////////////////////////////////
    /*$DB->update_data('users', $data=array( 'f_name' => 'samaa', 'l_name'=>'khaled', 'password'=> '123456'), $where = array('Email'=> 'haidihany@gmail.com') );*/
////// insert//////////////////////////////////////////

   /*$add= $DB->AddData($data= array('f_name'=>'haidi','l_name'=>'hany','Email'=>"sdsdsd@dkjf",'password'=>'2000'),
    	$column_name= array('f_name','l_name','Email','password'),'users') ;
        if ($add){
            echo 'the adding is done ';
        }
        
        else 
           echo 'Erorr';*/

           ///////////////////////DELETE////////////////////////////////////

         //Delete Test*/
       /*$delete = $DB->Delete_Data('products', $data = array('p_id'=> '10'));
       
       if ( $delete  )  echo 'The Data Is deleted ';
       else            echo 'Erorr';*/