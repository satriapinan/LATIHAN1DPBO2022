class TimSepakBola:

	# Konstruktor
	def __init__(self, jumlahPemain):
		self.namaTim = ""
		self.negara = ""
		self.tahun = 0
		self.namaPemain = ["0"]*jumlahPemain

	# Set & Get
	
	# Nama Tim
	def setNamaTim(self, namaTim):
		self.namaTim = namaTim

	def getNamaTim(self):
		return self.namaTim

	# Asal Negara
	def setNegara(self, negara):
		self.negara = negara

	def getNegara(self):
		return self.negara

	# Tahun Berdiri
	def setTahun(self, tahun):
		self.tahun = tahun

	def getTahun(self):
		return self.tahun

	# Nama
	def setNamaPemain(self, namaPemain, jumlahPemain):
		for i in range(jumlahPemain):
			self.namaPemain[i] = namaPemain[i]

	def getNamaPemain(self, jumlahPemain):
		return self.namaPemain[jumlahPemain]