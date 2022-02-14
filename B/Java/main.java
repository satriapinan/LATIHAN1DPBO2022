import java.util.Scanner;

class Main {
	public static void main(String[] args) {
		// Tampilan awal
		System.out.println("===== Selamat Datang di Program Data Tim Sepak Bola =====");

		/* Inputan banyak tim */
		System.out.print("\nMasukan Banyak Tim : ");
		
		Scanner sc = new Scanner(System.in);
		int jumlahTim = 0;
		try {
			jumlahTim = sc.nextInt();
		} catch(Exception e) {}
		System.out.println();

		// array tim sebanyak jumlah tim
		TimSepakBola tim[] = new TimSepakBola[jumlahTim];

		// Variabel temporary untuk setiap atribut
		String namaTim = "", negara = "";
		int tahun = 0, jumlahPemain = 0;

		// Perulangan input data tiap tim
		for(int i = 0; i < jumlahTim; i++) {
			System.out.println("=========== Masukan Data Tim  " + (i+1) + " =========");

			System.out.print("Masukan Nama Tim      : ");
			try {
				namaTim = sc.next();
			} catch(Exception e) {}

			System.out.print("Masukan Asal Negara   : ");
			try {
				negara = sc.next();
			} catch(Exception e) {}

			System.out.print("Masukan Tahun Berdiri : ");
			try {
				tahun = sc.nextInt();
			} catch(Exception e) {}

			System.out.print("Masukan Jumlah Pemain : ");
			try {
				jumlahPemain = sc.nextInt();
			} catch(Exception e) {}

			String namaPemain[] = new String[jumlahPemain];
			System.out.println("Masukan Nama Pemain   :");

			for(int j = 0; j < jumlahPemain; j++) {
				System.out.print((j+1) + ". ");
				try {
					namaPemain[j] = sc.next();
				} catch(Exception e) {}
			}

			// Setter
			tim[i] = new TimSepakBola(jumlahPemain);
			tim[i].setNamaTim(namaTim);
			tim[i].setNegara(negara);
			tim[i].setTahun(tahun);
			tim[i].setNamaPemain(namaPemain, jumlahPemain);
		}

		// Perulangan output data tim
		for(int i = 0; i < jumlahTim; i++) {
			System.out.println("\n=========== Data Tim " + (i+1) + " ==========");
		
			System.out.println("Nama Tim      : " + tim[i].getNamaTim());
			System.out.println("Asal Negara   : " + tim[i].getNegara());
			System.out.println("Tahun Berdiri : " + tim[i].getTahun());
			System.out.println("Nama Pemain   : ");
			for(int j = 0; j < jumlahPemain; j++) {
				System.out.println((j+1) + ". " + tim[i].getNamaPemain(j));
			}
		}

		// Tampilan akhir
		System.out.println("\n=========== Terimakasih! ==========");
	}
}