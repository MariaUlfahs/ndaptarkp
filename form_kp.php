<?php
include_once 'header.blade.php';
include_once 'includes/kp.inc.php';
$pro = new kp($db);
$stmt = $pro->readAll_kp();
?>
	<div class="row">
		<div class="col-md-6 text-left">
			<h4>Data KP</h4>
		</div>
		<div class="col-md-6 text-right">
			<button onclick="location.href='tambah_kp.php'" class="btn btn-primary"> Tambah Data KP </button>
		</div> 
	</div>
	<br/>

	<table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
                <th width="30px">No</th>
                <th>Kode</th>
                <th>Nama Instansi</th>
                <th>Deskripsi</th>
				<th>Alamat Instansi</th>
                <th>Anggota 1</th>
				<th>Anggota 2</th>
                <th>Anggota 3</th>
				<th>Anggota 4</th>
                <th width="100px">Aksi</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Instansi</th>
                <th>Deskripsi</th>
				<th>Alamat Instansi</th>
                <th>Anggota 1</th>
				<th>Anggota 2</th>
                <th>Anggota 3</th>
				<th>Anggota 4</th>
                <th>Aksi</th>
            </tr>
        </tfoot>

        <tbody>
<?php
$no=1;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['kode'] ?></td>
                <td><?php echo $row['nama_ins'] ?></td>
                <td><?php echo $row['deskripsi'] ?></td>
				<td><?php echo $row['alamat_ins'] ?></td>
                <td><?php echo $row['anggota1'] ?></td>
				<td><?php echo $row['anggota2'] ?></td>
				<td><?php echo $row['anggota3'] ?></td>
				<td><?php echo $row['anggota4'] ?></td>
                <td class="text-center">
					<a href="ubah_kp.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					<a href="delete_kp.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			    </td>
            </tr>
<?php
}
?>
        </tbody>

    </table>
    <br>		
<?php
include_once 'footer.blade.php';
?>