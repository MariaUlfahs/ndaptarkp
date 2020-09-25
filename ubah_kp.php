<?php
include_once 'header.blade.php';
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once 'includes/kp.inc.php';
include_once 'includes/config.inc.php';
$db = DB();
$eks = new kp($db);

$eks->id = $id;

$eks->readOne_kp();

if($_POST){

	$eks->kode = $_POST['kode'];
	$eks->nama_ins = $_POST['nama_ins'];
	$eks->deskripsi = $_POST['deskripsi'];
	$eks->alamat_ins = $_POST['alamat_ins'];
	$eks->anggota1 = $_POST['anggota1'];
	$eks->anggota2 = $_POST['anggota2'];
	$eks->anggota3 = $_POST['anggota3'];
	$eks->anggota4 = $_POST['anggota4'];
	
	if($eks->update_kp()){
		echo "<script>location.href='data_kp.php'</script>";
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
			  <h4>Ubah Data KP >> KODE : <?php echo $eks->kode; ?></h4>
			</div>
			
			    <form method="post">
				  <div class="form-group">
				    <input type="hidden" class="form-control" id="kode" name="kode" value="<?php echo $eks->kode; ?>">
				  </div>
				  <div class="form-group">
				    <label for="nama_ins">Nama Instansi</label>
				    <input type="text" class="form-control" id="nama_ins" name="nama_ins" value="<?php echo $eks->nama_ins; ?>">
				  </div>
				  <div class="form-group">
				    <label for="deskripsi">Deskripsi</label>
				    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo $eks->deskripsi; ?>">
				  </div>
				  <div class="form-group">
				    <label for="alamat_ins">Alamat Instansi</label>
				    <input type="text" class="form-control" id="alamat_ins" name="alamat_ins" value="<?php echo $eks->alamat_ins; ?>">
				  </div>
				  <div class="form-group">
				    <label for="anggota1">Anggota 1</label>
				    <input type="text" class="form-control" id="anggota1" name="anggota1" value="<?php echo $eks->anggota1; ?>">
				  </div>
				  <div class="form-group">
				    <label for="anggota2">Anggota 2</label>
				    <input type="text" class="form-control" id="anggota2" name="anggota2" value="<?php echo $eks->anggota2; ?>">
				  </div>
				  <div class="form-group">
				    <label for="anggota3">Anggota 3</label>
				    <input type="text" class="form-control" id="anggota3" name="anggota3" value="<?php echo $eks->anggota3; ?>">
				  </div>
				  <div class="form-group">
				    <label for="anggota4">Anggota 4</label>
				    <input type="text" class="form-control" id="anggota4" name="anggota4" value="<?php echo $eks->anggota4; ?>">
				  </div>
				  
				  
				  <button type="button" onclick="location.href='data_kp.php'" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</button>
				  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-saved"></span> Ubah</button>
				</form>
			  
		  </div>
		</div>
		<?php
include_once 'footer.blade.php';
?>