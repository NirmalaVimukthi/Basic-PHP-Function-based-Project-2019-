<?php
require_once('functions/function.php');
load_head_component();
 connect_db();
     $em = new viewemployee();
     $emp_name = $_POST['name'];

     $emp_email  = $_POST['email'];

      $emp_photo = $_POST['image'];

      $emp_address = $_POST['add'];

      $error=0;
     if(isset($_POST['error'])) {
     	$error = $_POST['error'];
 											}
      $bank_id = $_POST['bank'];
      echo $bank_id;

     $emp_address= str_replace(",","-",$emp_address);

       $emp_password = $_POST['pass'];


$branch_id = $_POST['branch'];
 $em -> Insert($emp_name, $emp_email, $emp_photo, $emp_address, $emp_password,$branch_id);

 header('Location:  employee.php?error='.$error.'');
