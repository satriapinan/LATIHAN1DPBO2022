<?php

class Mahasiswa {
	// Kelas mahasiswa

	// Atribut
	private $nim = "";	// NIM Mahasiswa
	private $nama = "";	// Nama Mahasiswa
	private $gender = "";	// Jenis Kelamin Mahasiswa
	private $prodi = "";	// Program Studi Mahasiswa
	private $semester = 0;	// Semester Mahasiswa

	// Konstruktor
	function __construct($nim = "", $nama = "", $gender = "", $prodi = "", $semester = 0)
	{
		$this->nim = $nim;
		$this->nama = $nama;
		$this->gender = $gender;
		$this->prodi = $prodi;
		$this->semester = $semester;
	}

	/* Set & Get */

	// NIM Mahasiswa
	public function setNIM($nim) {
		$this->nim = $nim; 
	}
	public function getNIM() {
		return $this->nim; 
	}

	// Nama Mahasiswa
	public function setNama($nama) {
		$this->nama = $nama; 
	}
	public function getNama() {
		return $this->nama; 
	}

	// Jenis Kelamin Mahasiswa
	public function setGender($gender) {
		$this->gender = $gender; 
	}
	public function getGender() {
		return $this->gender; 
	}

	// Program Studi Mahasiswa
	public function setProdi($prodi) {
		$this->prodi = $prodi; 
	}
	public function getProdi() {
		return $this->prodi; 
	}

	// Semester Mahasiswa
	public function setSemester($semester) {
		$this->semester = $semester; 
	}
	public function getSemester() {
		return $this->semester; 
	}

	// Destruktor
	function __destruct() {}
}

?>
