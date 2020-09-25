<?php
include_once 'header.blade.php';
if($_POST){
	
	include_once 'includes/mhs.inc.php';
	include_once 'includes/config.inc.php';
	$db = DB();
	$eks = new Mhs($db);

	$eks->nim = $_POST['nim'];
	$eks->nama = $_POST['nama'];
	$eks->jur = $_POST['jur'];
	
	
	if($eks->insert()){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Berhasil Tambah Data!</strong> Tambah lagi atau <a href="mhs.php">lihat semua data</a>.
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
			  <h5>Tambah Data Mahasiswa</h5>
			</div>
			
			    <form method="post">
				  <div class="form-group">
				    <label for="ck">NIM</label>
				    <input type="text" class="form-control" id="nim" name="nim" required>
				  </div>
			    <form method="post">
				  <div class="form-group">
				    <label for="nama">Nama Mahasiswa</label>
				    <input type="text" class="form-control" id="nama" name="nama" required>
				  </div>
				  <div class="form-group">
				    <label for="jur">Jurusan</label>
				    <select class="form-control" id="jur" name="jur">
				    	<option value='Teknik Informatika'>Teknik Informatika</option>
				    	<option value='Sistem Informasi'>Sistem Informasi</option>
						<option value='Teknik Komputer'>Teknik Komputer</option>
				    </select>
				  </div>
				  <form method="post">
				  <button type="button" onclick="location.href='mhs.php'" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</button>
				  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
				</form>
			  
		  </div>
		</div>
<br>
<?php
include_once 'footer.blade.php';
?>