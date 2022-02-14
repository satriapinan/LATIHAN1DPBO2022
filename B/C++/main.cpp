#include <iostream>
#include <string>

using namespace std;

#include "TimSepakBola.cpp"

int main() {
	// Tampilan Awal
	cout << "===== Selamat Datang di Program Data Tim Sepak Bola =====\n" << endl;
	
	// Inputan banyak tim yang ingin di data
	int jumlahTim = 0;
	cout << "Masukan Banyak Tim : ";
	cin >> jumlahTim;
	cout << "=======================\n" << endl;
	TimSepakBola arrTim[jumlahTim];	// batas array tim sebanyak jumlah tim inputan user

	/* Inputan data semua tim*/

	// Variabel temporary untuk setiap atribut
	string namaTim, negara;
	int tahun, jumlahPemain;

	// Perulangan inputan data tim sebanyak jumlah tim
	for(int i = 0; i < jumlahTim; i++) {
		cout << "=========== Masukan Data Tim " << i+1 << " ===========" << endl;	

		cout << "Masukan Nama Tim      : ";
		cin >> namaTim;
	
		cout << "Masukan Asal Negara   : ";
		cin >> negara;
	
		cout << "Masukan Tahun Berdiri : ";
		cin >> tahun;

		cout << "Masukan Jumlah Pemain : ";
		cin >> jumlahPemain;

		// Pengkondisian jika user input jumlah pemain kurang dari 11
		if(jumlahPemain < 11) {
			cout << "--------------------------------------------------------------" << endl;
			cout << "| ERROR : Jumlah pemain harus lebih dari atau sama dengan 11 |" << endl;
			cout << "| ACTION: Silahkan masukan nama pemain sebanyak 11 nama      |" << endl;
			cout << "--------------------------------------------------------------" << endl;

			jumlahPemain = 11;
		}

		string namaPemain[jumlahPemain];
		cout << "Masukan Nama Pemain :" << endl;
		for(int j = 0; j < jumlahPemain; j++) {
			cout << j+1 << ". ";
			cin >> namaPemain[j];
		}

		// Set data dari tiap tim
		arrTim[i].setNamaTim(namaTim);
		arrTim[i].setNegara(negara);
		arrTim[i].setTahun(tahun);
		arrTim[i].setNamaPemain(namaPemain, jumlahPemain);
	}

	// Perulangan output data tim
	for(int i = 0; i < jumlahTim; i++) {
		cout << "\n=========== Data Tim " << i+1 << " ===========" << endl;	
		
		cout << "Nama Tim      : " << arrTim[i].getNamaTim() << endl;
		cout << "Asal Negara   : " << arrTim[i].getNegara() << endl;
		cout << "Tahun Berdiri : " << arrTim[i].getTahun() << endl;

		cout << "Nama Pemain   : " << endl;
		for(int j = 0; j < jumlahPemain; j++)
		{
			cout << j+1 << ". ";
			cout << arrTim[i].getNamaPemain(j) << endl;
		}
	}

	// Tampilan Akhir
	cout << "\n=========== Terimakasih! ==========" << endl;	

	return 0;
}