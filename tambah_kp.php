<?php
include_once 'header.blade.php';
if($_POST){
	
	include_once 'includes/kp.inc.php';
	include_once 'includes/config.inc.php';
	$db = DB();
	$eks = new kp($db);

	$eks->kode = $_POST['kode'];
	$eks->nama_ins = $_POST['nama_ins'];
	$eks->deskripsi = $_POST['deskripsi'];
	$eks->alamat_ins = $_POST['alamat_ins'];
	$eks->anggota1 = $_POST['anggota1'];
	$eks->anggota2 = $_POST['anggota2'];
	$eks->anggota3 = $_POST['anggota3'];
	$eks->anggota4 = $_POST['anggota4'];
	
	
	if($eks->insert_kp()){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Berhasil Tambah Data!</strong> Tambah lagi atau <a href="data_kp.php">lihat semua data</a>.
</div>
<?php
	}
	
	else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Gagal Tambah Data!</strong> Terjadi kesalahan, coba sekali lagi.
</div>
<?php
	}
}
?>
		<div class="row">
		  <div class="col-xs-12 col-sm-12 col-md-8">
		  	<div class="page-header">
			  <h5>Tambah Data KP</h5>
			</div>
			
			    <form method="post">
				  <div class="form-group">
				    <label for="kode">Kode</label>
				    <input type="text" class="form-control" id="kode" name="kode" required>
				  </div>
			    
				  <div class="form-group">
				    <label for="nama_ins">Nama Instansi</label>
				    <input type="text" class="form-control" id="nama_ins" name="nama_ins" required>
				  </div>
				
				  <div class="form-group">
				    <label for="deskripsi">Deskripsi</label>
				    <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
				  </div>
				
					<div class="form-group">
				    <label for="alamat_ins">Alamat Instansi</label>
				    <input type="text" class="form-control" id="alamat_ins" name="alamat_ins" required>
				  </div>
				
					<div class="form-group">
				    <label for="anggota1">Anggota 1</label>
				    <input type="text" class="form-control" id="anggota1" name="anggota1" required>
				  </div>
				
					<div class="form-group">
				    <label for="anggota2">Anggota 2</label>
				    <input type="text" class="form-control" id="anggota2" name="anggota2" >
				  </div>
				
					<div class="form-group">
				    <label for="anggota3">Anggota 3</label>
				    <input type="text" class="form-control" id="anggota3" name="anggota3" >
				  </div>
				
					<div class="form-group">
				    <label for="anggota4">Anggota 4</label>
				    <input type="text" class="form-control" id="anggota4" name="anggota4" >
				  </div>
				
				  
				  <button type="button" onclick="location.href='data_kp.php'" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</button>
				  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
				</form>
			  
		  </div>
		</div>
		<br>
		<?php
include_once 'footer.blade.php';
?>