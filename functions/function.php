<?php 
function load_head_component(){
	require_once('layout/head.php');

}

function load_header(){
	require_once('layout/header.php');

}

function load_slide_bar(){
	require_once('layout/slidebar.php');

}

function load_footer(){
	require_once('layout/foot.php');

}

function connect_db(){
	require_once('include/dbbank.inc.php');
	require_once('include/employee.inc.php');
	require_once('include/viewemployee.inc.php');

}


?>