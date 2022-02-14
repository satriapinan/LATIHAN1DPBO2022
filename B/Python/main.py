from TimSepakBola import TimSepakBola

# Tampilan awal
print("===== Selamat Datang di Program Data Tim Sepak Bola =====")
print()

# Input banyak tim
jumlahTim = int(input("Masukan Banyak Tim : "))
print("=======================")
print()

# Inisialisasi batas variabel jumlah tim dan jumlah pemain
tim =  ["0"]*jumlahTim
jumlahPemain = [0]*jumlahTim

# Perulangan input data tim
for i in range(jumlahTim):
	print("=========== Masukan Data Tim", i+1, "==========")
	namaTim = input("Masukan Nama Tim      : ")
	negara = input("Masukan Asal Negara   : ")
	tahun = int(input("Masukan Tahun Berdiri : "))
	jumlahPemain[i] = int(input("Masukan Jumlah Pemain : "))

	# Kondisi jika input jumlah pemain < 11 (harus >= 11)
	if jumlahPemain[i] < 11:
		print("--------------------------------------------------------------")
		print("| ERROR : Jumlah pemain harus lebih dari atau sama dengan 11 |")
		print("| ACTION: Silahkan masukan nama pemain sebanyak 11 nama      |")
		print("--------------------------------------------------------------")
		
		jumlahPemain[i] = 11

	# Inisialisasi batas variabel nama pemain
	namaPemain = ["0"]*jumlahPemain[i]

	print("Masukan Nama Pemain   : ")
	for j in range(jumlahPemain[i]):
		print(j + 1, end=". ")
		namaPemain[j] = input()
	
	# Setter
	tim[i] = TimSepakBola(jumlahPemain[i])
	tim[i].setNamaTim(namaTim)
	tim[i].setNegara(negara)
	tim[i].setTahun(tahun)
	tim[i].setNamaPemain(namaPemain, jumlahPemain[i])

# Perulangan output data tim
for i in range(jumlahTim):
	print("\n=========== Data Tim", i+1, "==========")

	print("Nama Tim      :", tim[i].getNamaTim())
	print("Asal Negara   :", tim[i].getNegara())
	print("tahun Berdiri :", tim[i].getTahun())
	print("Nama Pemain   :")
	for j in range(jumlahPemain[i]):
		print(j + 1, end="")
		print(".", tim[i].getNamaPemain(j))

# Tampilan akhir
print("\n=========== Terimakasih! ==========")