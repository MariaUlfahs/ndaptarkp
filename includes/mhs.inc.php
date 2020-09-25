<?php
//kelas mahasiswa
class Mhs{
	
	private $conn;
	private $table_name = "mahasiswa";
	
	public $id;
	public $nim;
	public $nama;
	public $jur;
	
	public function __construct($db){
		$this->conn = $db;
	}
	
	function insert(){
		
		$query = "insert into ".$this->table_name." values('',?,?,?)";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->nim);
		$stmt->bindParam(2, $this->nama);
		$stmt->bindParam(3, $this->jur);
		
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}
	
	function readAll(){

		$query = "SELECT * FROM ".$this->table_name." ORDER BY id ASC";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	
	// used when filling up the update product form
	function readOne(){
		
		$query = "SELECT * FROM " . $this->table_name . " WHERE id=? LIMIT 0,1";

		$stmt = $this->conn->prepare( $query );
		$stmt->bindParam(1, $this->id);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$this->id = $row['id'];
		$this->nim = $row['nim'];
		$this->nama = $row['nama'];
		$this->jur = $row['jurusan'];
	}
	
	// update
	function update(){

		$query = "UPDATE 
					" . $this->table_name . " 
				SET 
					nim = :nim,
					nama = :nama,
					jurusan = :jur
				WHERE
					id = :id";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':nim', $this->nim);
		$stmt->bindParam(':nama', $this->nama);
		$stmt->bindParam(':jur', $this->jur);
		$stmt->bindParam(':id', $this->id);
		
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	
	// delete the product
	function delete(){
	
		$query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
		
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id);

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	/*function hapus() {
		$id=$this->input->post('id');
		if ($id) {
			$kunci=array('kd_jabatan'=>$id);
			$isi=array('aktif'=>0);
			$this->model_global->update_data($kunci,'tb_jabatan',$isi);
			echo '<div class="alert alert-warning alert-dismissible fade in" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					Data Jabatan berhasil dihapus.
				</div>';
		}
	} */
}
?>