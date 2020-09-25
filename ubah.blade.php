<?php
include_once 'header.blade.php';
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once 'includes/mhs.inc.php';
include_once 'includes/config.inc.php';
$db = DB();
$eks = new Mhs($db);

$eks->id = $id;

$eks->readOne();

if($_POST){

	$eks->nim = $_POST['nim'];
	$eks->nama = $_POST['nama'];
	$eks->jur = $_POST['jur'];
	
	if($eks->update()){
		echo "<script>location.href='mhs.php'</script>";
	} else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Gagal Ubah Data!</strong> Terjadi kesalahan, coba sekali lagi.
</div>
<?php
	}
}
?>
		<div class="row">
		  <div class="col-xs-12 col-sm-12 col-md-8">
		  	<div class="page-header">
			  <h4>Ubah Data Mahasiswa >> NIM : <?php echo $eks->nim; ?></h4>
			</div>
			
			    <form method="post">
				  <div class="form-group">
				    <input type="hidden" class="form-control" id="nim" name="nim" value="<?php echo $eks->nim; ?>">
				  </div>
				  <div class="form-group">
				    <label for="nama">Nama Mahasiswa</label>
				    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $eks->nama; ?>">
				  </div>
				  <div class="form-group">
				    <label for="jur">Jurusan</label>
				    <select class="form-control" id="jur" name="jur">
				    	<option><?php echo $eks->jur; ?></option>
				    	<option value='Teknik Informatika'>Teknik Informatika</option>
				    	<option value='Sistem Informasi'>Sistem Informasi</option>
				    </select>
				  </div>
				  <button type="button" onclick="location.href='mhs.php'" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</button>
				  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-saved"></span> Ubah</button>
				</form>
			  
		  </div>
		</div>
		<?php
include_once 'footer.blade.php';
?>