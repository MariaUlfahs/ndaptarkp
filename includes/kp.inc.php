<?php
//kelas kp
class kp{
	
	private $conn;
	private $table_name = "form_kp";
	
	public $id;
	public $kode;
	public $nama_ins;
	public $deskripsi;
	public $alamat_ins;
	public $anggota1;
	public $anggota2;
	public $anggota3;
	public $anggota4;
	
	public function __construct($db){
		$this->conn = $db;
	}
	
	function insert_kp(){
		
		$query = "insert into ".$this->table_name." values('',?,?,?,?,?,?,?,?)";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->kode);
		$stmt->bindParam(2, $this->nama_ins);
		$stmt->bindParam(3, $this->deskripsi);
		$stmt->bindParam(4, $this->alamat_ins);
		$stmt->bindParam(5, $this->anggota1);
		$stmt->bindParam(6, $this->anggota2);
		$stmt->bindParam(7, $this->anggota3);
		$stmt->bindParam(8, $this->anggota4);
		
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}
	
	function readAll_kp(){

		$query = "SELECT * FROM ".$this->table_name." ORDER BY id ASC";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	
	// used when filling up the update product form
	function readOne_kp(){
		
		$query = "SELECT * FROM " . $this->table_name . " WHERE id=? LIMIT 0,1";

		$stmt = $this->conn->prepare( $query );
		$stmt->bindParam(1, $this->id);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$this->id = $row['id'];
		$this->kode = $row['kode'];
		$this->nama_ins = $row['nama_ins'];
		$this->deskripsi = $row['deskripsi'];
		$this->alamat_ins = $row['alamat_ins'];
		$this->anggota1 = $row['anggota1'];
		$this->anggota2 = $row['anggota2'];
		$this->anggota3 = $row['anggota3'];
		$this->anggota4 = $row['anggota4'];
	}
	
	// update
	function update_kp(){

		$query = "UPDATE 
					" . $this->table_name . " 
				SET 
					kode = :kode,
					nama_ins = :nama_ins,
					deskripsi = :deskripsi,
					alamat_ins = :alamat_ins,
					anggota1 = :anggota1,
					anggota2 = :anggota2,
					anggota3 = :anggota3,
					anggota4 = :anggota4
				WHERE
					id = :id";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':kode', $this->kode);
		$stmt->bindParam(':nama_ins', $this->nama_ins);
		$stmt->bindParam(':deskripsi', $this->deskripsi);
		$stmt->bindParam(':alamat_ins', $this->alamat_ins);
		$stmt->bindParam(':anggota1', $this->anggota1);
		$stmt->bindParam(':anggota2', $this->anggota2);
		$stmt->bindParam(':anggota3', $this->anggota3);
		$stmt->bindParam(':anggota4', $this->anggota4);
		$stmt->bindParam(':id', $this->id);
		
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	
	// delete the product
	function delete_kp(){
	
		$query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
		
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id);

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
}
?>