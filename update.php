<?php
require_once('functions/function.php');
load_head_component();
 connect_db();
 $id = $_GET['id'];
     $em = new viewemployee();


     $emp_name = $_POST['name'];
     if(isset($emp_name)){
       $em -> update("emp_name","$emp_name","$id");
     }

     $emp_email  = $_POST['email'];
      if(isset($emp_email)){
       $em -> update("emp_email","$emp_email","$id");
     }

      $emp_image = $_POST['image'];
      if(isset($emp_name)){
       $em -> update("emp_image","$emp_image","$id");
     }

      $emp_address = $_POST['add'];
      $emp_address= str_replace(",","-",$emp_address);
      
      if(isset($emp_address)){
       $em -> update("emp_address","$emp_address","$id");
     }


      $error=0;
     if(isset($_POST['error'])) {
     	$error = $_POST['error'];
 											}
      $bank_id = $_POST['bank'];
      echo $bank_id;

       if(isset($bank_id)){
       $em -> update("bank_id","$bank_id","$id");
     }
    $branch_id = $_POST['branch'];
    if(isset($branch_id)){
       $em -> update("branch_id","$branch","$id");
     }

       $emp_password = $_POST['pass'];

       if(isset($emp_password)){
       $em -> update("emp_password","$emp_password","$id");
     }


// header('Location:  employee.php?error='.$error.'');
