<?php
require_once('functions/function.php');
load_head_component();
connect_db();
$error=null;
 $id = $_GET['id'];
 $page =$_POST['page'];
  $table =$_POST['table'];
   $where =$_POST['where'];
 $key =$_POST['key'];
 $name =$_POST['name'];
 $em = new viewemployee();
$em -> all_updater($table,$key,$name,$id,$where);

header('Location:  '.$page.'.php');