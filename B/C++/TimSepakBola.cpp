class TimSepakBola {
	private:
		string namaTim;		// Atribut nama tim
		string negara;		// Atribut asal negara
		int tahun;		// Atribut tahun berdiri
		string namaPemain[20];	// Atribut nama pemain

	public:
		// Kosntruktor
		TimSepakBola() {}

		/* Set & Get */
		
		// Nama Tim
		void setNamaTim(string namaTim) {
			this->namaTim = namaTim;
		}
		string getNamaTim() {
			return this->namaTim;
		}

		// Asal Negara Tim
		void setNegara(string negara) {
			this->negara = negara;
		}
		string getNegara() {
			return this->negara;
		}

		// Tahun berdiri Tim
		void setTahun(int tahun) {
			this->tahun = tahun;
		}
		int getTahun() {
			return this->tahun;
		}

		// Nama Pemain
		void setNamaPemain(string namaPemain[], int jumlahPemain) {
			for(int i = 0; i < jumlahPemain; i++) {
				this->namaPemain[i] = namaPemain[i];
			}
		}
		string getNamaPemain(int jumlahPemain) {
			return this->namaPemain[jumlahPemain];
		}

		// Destruktor
		~TimSepakBola() {}
};
