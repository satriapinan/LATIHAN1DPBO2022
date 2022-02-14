<?php

class TimSepakBola {
	// Atribut
	private $namaTim;		// Nama tim
	private $negara;		// Asal negara
	private $tahun;			// Tahun berdiri
	private $namaPemain;	// Nama pemain

	// Konstruktor
	public function __construct() {
		$this->namaTim = "";
		$this->negara = "";
		$this->tahun = 0;
		$this->namaPemain = [];
	}

	// Set & Get

	// Nama Tim
	public function setNamaTim($namaTim) {
		$this->namaTim = $namaTim;
	}
	public function getNamaTim() {
		return $this->namaTim;
	}

	// Asal Negara
	public function setNegara($negara) {
		$this->negara = $negara;
	}
	public function getNegara() {
		return $this->negara;
	}

	// Tahun Berdiri
	public function setTahun($tahun) {
		$this->tahun = $tahun;
	}
	public function getTahun() {
		return $this->tahun;
	}

	// Nama Pemain
	public function setNamaPemain($namaPemain) {
		$this->namaPemain[] = $namaPemain;
	}
	public function getNamaPemain($i) {
		return $this->namaPemain[$i];
	}

	// Destruktor
	function __destruct() {}
}

?>