<?php
include 'fungsi/fungsi.php';
$id=$_GET['id']; 
$bjk = new data; 
$lihatedit = $bjk->lihatedit($id);
$l=$lihatedit->fetch_assoc();
if(isset($_POST['submit'])){

	$nama =$_POST['nama'];
	$alamat =$_POST['alamat'];
	$telp =$_POST['telp'];

  
$bjk->edit($id,$nama,$alamat,$telp); 
 

}
 
?>
<!DOCTYPE html>
<html>
<head>
	 
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>G0o-g0o</title>

    <!-- Bootstrap -->
    <link href="gaya/bootstrap.min.css" rel="stylesheet">
<link href="gaya/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
		<nav class="navbar navbar-default navnav">
  <div class="container-fluid">
    <div class="navbar-header">
    <div class="navbar-header navbar-brand nn">
    
        <p>G0o g0o </p>
    </div>
  </div>
</nav>
		<div class="row">
			   
				  	<div class="col-md-8 col-md-offset-2"> 
<form method="post" action="">
	<input type="hidden" name="nama" placeholder="masukan nama" value="<?= $l['id'] ?>" > 
	  <div class="form-group">
    <label for="Nama">Nama</label>
	<input type="text" class="form-control"  name="nama" placeholder="masukan nama" value="<?= $l['nama']
	 ?>"> </div><br>
	   <div class="form-group">
    <label for=" Alamat">Alamat</label>
	<textarea name="alamat" class="form-control"><?= $l['alamat']
	 ?></textarea><br>
	 </div>
	   <div class="form-group">
    <label for="telp">Telnp</label>
	<input type="text" class="form-control" name="telp" placeholder="masukan no telp0on" value="<?= $l['telp']
	 ?>"><br></div>
	<input class="btn btn-info" type="submit" name="submit" value="tambah">
</form></div></div></div>
 </body>
</html>