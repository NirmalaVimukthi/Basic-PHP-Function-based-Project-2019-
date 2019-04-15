<?php
require_once('functions/function.php');
load_head_component();
 connect_db();
 $id = $_GET['id'];
  $error = null;
     $em = new viewemployee();


     $bank_name = $_POST['name'];
     if(isset($bank_name)){
       $em -> bank_update("bank_name","$bank_name","$id");
     }


if(isset($error)){
 header('Location: bank.php?error='.$error.'');
}
else{
header('Location: bank.php');
}

