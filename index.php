<?php 
include 'fungsi/fungsi.php';
$bjk = new data; 
$lihat = $bjk->lihat(); 

var_dump($lihat);
 
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
		<nav class="navbar navbar-default navnav ">
  <div class="container-fluid ">
    <div class="navbar-header navbar-brand nn">
    
        <p>G0o g0o </p>
      </a>
    </div>
  </div>
</nav>
			<div class="row">
			   
				  	<div class="col-md-8 col-md-offset-2"> 
				  		<table  class="table table-striped">
								<a  class="btn btn-warning" href="tambah.php">tambah</a>
  
  <tr><th>no</th><th>nama</th><th>alamat</th><th>telpon</th><th>aksi</th></tr>
  <?php $n = 1; foreach ($lihat as $t) {
  	# code...
  ?>
  
  <tr><td><?= $n ?></td><td><?=  $t['nama'] ?></td><td><?=  $t['alamat'] ?></td><td><?=  $t['telp'] ?></td><th><a  class="btn btn-info" href="edit.php?id=<?= $t['id']

   ?>">edit</a> <a  class="btn btn-danger" href="delet.php?id=<?= $t['id']

   ?>">delet</a> </th></tr>
<?php 
 $n++;
  }
?>

</table>
					</div>
			</div>
		</div>
</body>
</html>