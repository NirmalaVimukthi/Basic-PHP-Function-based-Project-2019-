<?php
require_once('functions/function.php');
load_head_component();
 connect_db();
 $id = $_GET['id'];
  $error = null;
     $em = new viewemployee();

  $fileloc=null;
  if(isset( $_FILES['image']['name'])){
  $fileName = $_FILES['image']['name'];
  $fileTmpName = $_FILES['image']['tmp_name'];
  $fileSize = $_FILES['image']['size'];
  $fileError = $_FILES['image']['error'];
  $fileType = $_FILES['image']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));
  
  $allowed = array('jpg','jpeg','png');

  if (in_array($fileActualExt, $allowed)){
    
    if($fileError === 0){
      if ($fileSize < 10000000){
        $fileNameNew = uniqid('ep_',true).".".$fileActualExt;
        $fileDestination = 'images/'.$fileNameNew; 
        $fileloc ='images/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        $em -> update("emp_photo","$fileloc","$id");
      }
      else{
        $error ="Your file is too big !";
       
      }
    
    }
    else{
      $error = "thre was an error !";
     
    } 
  }

  else{
    $error = "You Cannot upload files of this type";
   
  }

}
   

     $emp_name = $_POST['name'];
     if(isset($emp_name)){
       $em -> update("emp_name","$emp_name","$id");
     }

     $emp_email  = $_POST['email'];
      if(isset($emp_email)){
       $em -> update("emp_email","$emp_email","$id");
     }

   
      
    

      $emp_address = $_POST['add'];
      $emp_address= str_replace(",","-",$emp_address);
      
      if(isset($emp_address)){
       $em -> update("emp_address","$emp_address","$id");
     }

 

      
    $branch_id = $_POST['branch'];
    if(isset($branch_id)){
       $em -> update("branch_id","$branch_id","$id");
     }

       $emp_password = $_POST['pass'];

       if(isset($emp_password)){
       $em -> update("emp_password","$emp_password","$id");
     }


header('Location: employee.php');

