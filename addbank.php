<?php
require_once('functions/function.php');
load_head_component();
 connect_db();
     $em = new viewemployee();
     $bank_name = $_POST['name'];

    

      $error=null;
       

     $bank_name= str_replace(",","-",$bank_name);

       



 $em -> Insert_bank($bank_name);
if(isset($error)){
 header('Location:  bank.php?error='.$error.'');
}
else{
  header('Location:  bank.php'); 
}
