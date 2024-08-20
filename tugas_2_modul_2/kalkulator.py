class Kalkulator :
    
    # Konstruktor kelas, menerima parameter
    def __init__(self, angka1, angka2):
        self.angka1 = angka1
        self.angka2 = angka2
        
    #Method untuk melakukan pertambahan 
    def tambah(self):
        return self.angka1 + self.angka2                #Mengembalikan hasil operasi
    
    #Method untuk melakukan perkurangan
    def kurang(self):
        return self.angka1 - self.angka2
    
    #Method untuk melakukan perkalian
    def kali (self):
        return self.angka1 * self.angka2 
    
    #Method untuk melakukan permbagian
    def bagi(self):
        if self.angka1 or self.angka2 != 0:             #Mengecek apakah masukan ada angka nol
            return self.angka1 / self.angka2            #jika tidak, akan melakukan permbagian dan mengembalikan nilainya
        else:  
            return "Error: Tidak bisa dibagi oleh nol"  #Jika ya, operasi tidak akan dilakukan, dan akan mengembalikan pesan error 
    
    
kalkulator = Kalkulator(4, 2) #Membuat objek dari kelas Kalkulator
print("Hasil pertambahan = ", kalkulator.tambah())
print("Hasil perkurangan = ", kalkulator.kurang())
print("Hasil perkalian = ", kalkulator.kali())
print("Hasil pembagian = ", kalkulator.bagi())

#cara lain memakai class Kalkulator
print("Hasil pertambahan = ", Kalkulator(5, 7).tambah())
print("Hasil perkurangan = ", Kalkulator(10, 7).kurang())
print("Hasil perkalian = ", Kalkulator(5, 3).kali())
print("Hasil pembagian = ", Kalkulator(15, 3).bagi())

