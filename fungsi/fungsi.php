 <?php
class data extends MYSQLI{
	public function __construct( )
	{
		$db = include 'db/db.php';
	 
		parent::__construct($db['host'],$db['user'],$db['pass'],$db['database']);
	}

	  public function lihat()
	{
		$lihat = $this->query('SELECT * FROM data');
		$catat  = array(); 
		while ($tampil = $lihat->fetch_assoc()) {
			$catat[] = $tampil;
			
		}
		return $catat;
	}
	  public function lihatedit($id)
	{
		$lihat = $this->query("SELECT * FROM data WHERE id='$id'");
 
		return $lihat;
	}


  public function tambah($a,$b,$c)
	{ 

		$k =$this->query("INSERT INTO data (nama,alamat,telp) VALUES ('$a','$b','$c')");
		if($k){
			echo "<script>alert('sukses menambah data');</script> ";
			echo "<script>window.location='index.php';</script> ";
		}else{
			echo "<script>alert('gagal menambah data');</script>";
		}

	}



  public function edit($a,$b,$c,$d)
	{  

		$k =$this->query("UPDATE data SET nama ='$b',
										  alamat='$c',
										  telp='$d' WHERE id='$a'");
		if($k){
			echo "<script>alert('sukses edit data');</script> ";
			echo "<script>window.location='index.php';</script> ";
		}else{
			echo "<script>alert('gagal edit data');</script>";
		}

	}

  public function delet($a)
	{  

		$k =$this->query("DELETE FROM data WHERE id='$a'");
		if($k){
			echo "<script>alert('sukses delet data');</script> ";
			echo "<script>window.location='index.php';</script> ";
		}else{
			echo "<script>alert('gagal delet data');</script>";
		}

	}


}

?>