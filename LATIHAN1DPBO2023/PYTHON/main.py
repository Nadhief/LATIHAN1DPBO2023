# import class file
from Mhs import Mhs
from Crud import Crud

masukan = [] # membuat variabel masukan menggunakan array

# iterasi
n = int(input())
for i in range(n):
    name = str(input())
    nim = str(input())
    ps = str(input())
    fakultas = str(input())
    
    masukan.append(Mhs(name, nim, ps, fakultas))

i = 0
for dataawal in masukan:
    print(str(i+1) + ".", dataawal.get_name(), "-", dataawal.get_nim(), "-", dataawal.get_ps(), "-", dataawal.get_fakultas())
    i += 1
    
nim = str(input())
Crud.ubah(nim, masukan)
i = 0
for dataubah in masukan:
    print(str(i+1) + ".", dataubah.get_name(), "-", dataubah.get_nim(), "-", dataubah.get_ps(), "-", dataubah.get_fakultas())
    i += 1
    
nim = str(input())
Crud.hapus(nim, masukan)
i = 0
for datahapus in masukan:
    print(str(i+1) + ".", datahapus.get_name(), "-", datahapus.get_nim(), "-", datahapus.get_ps(), "-", datahapus.get_fakultas())
    i += 1