<?php
include 'fungsi/fungsi.php';

if($_GET['id']){
	$id = $_GET['id'];
	$bjk = new data; 
 	$bjk->delet($id);
}
 
?>
  