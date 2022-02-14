public class TimSepakBola {
	// Atribut
	private String namaTim;			// Nama tim
	private String negara;			// Asal negara
	private int tahun;				// Tahun berdiri
	private String namaPemain[];	// Nama pemain

	// Konstruktor
	public TimSepakBola(int jumlahPemain) {
		this.namaTim = "";
		this.negara = "";
		this.tahun = 0;
		this.namaPemain = new String[jumlahPemain];
	}

	/* Set & Get*/

	// Nama tim
	public void setNamaTim(String namaTim) {
		this.namaTim = namaTim;
	}
	public String getNamaTim() {
		return this.namaTim;
	}

	// Asal negara
	public void setNegara(String negara) {
		this.negara = negara;
	}
	public String getNegara() {
		return this.negara;
	}

	// Tahun berdiri
	public void setTahun(int tahun) {
		this.tahun = tahun;
	}
	public int getTahun() {
		return this.tahun;
	}

	// Nama pemain
	public void setNamaPemain(String namaPemain[], int jumlahPemain) {
		for(int i = 0; i < jumlahPemain; i++) {
			this.namaPemain[i] = namaPemain[i];
		}
	}
	public String getNamaPemain(int pemain) {
		return this.namaPemain[pemain];
	}
}