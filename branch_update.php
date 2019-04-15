<?php
require_once('functions/function.php');
load_head_component();
 connect_db();
 $id = $_GET['id'];
  $error = null;
 $em = new viewemployee();


     $branch = $_POST['name'];
     if(isset($branch)){
       $em -> branch_update("branch_name","$branch","$id");
     }
     $add = $_POST['add'];
     if(isset($add)){
       $em -> branch_update("branch_address","$add","$id");
     }


if(isset($error)){
header('Location: branch.php?error='.$error.'');
}
else{
header('Location: branch.php');
}

