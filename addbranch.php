<?php
require_once('functions/function.php');
load_head_component();
 connect_db();
     $em = new viewemployee();
     $branch_name = $_POST['branch'];
     $branch_address = $_POST['add'];

      $branch_bank = $_POST['bank'];

    

      $error=null;
       

     $branch_address= str_replace(",","-",$branch_address);

       



 $em -> Insert_branch($branch_name,$branch_address,$branch_bank);
if(isset($error)){
header('Location:  branch.php?error='.$error.'');
}
else{
 header('Location:  branch.php'); 
}
