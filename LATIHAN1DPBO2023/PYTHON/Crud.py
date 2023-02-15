class Crud:
      
    # membuat method Update 
    def ubah(nim, masukan):
        name = []
        nimubah = []
        ps = []
        fakultas = []
        
        i=0;
        for masukan in masukan:
            if (nim == masukan.get_nim()):
                # print(str(i+1) + ".", masukan.get_name(), "-", masukan.get_nim(), "-", masukan.get_ps(), "-", masukan.get_fakultas())
                name = str(input())
                nimubah = str(input())
                ps = str(input())
                fakultas = str(input())
                
                masukan.set_name(name)
                masukan.set_nim(nimubah)
                masukan.set_ps(ps)
                masukan.set_fakultas(fakultas)
                i+1
    
    def hapus(nim, masukan):
        i = 0;
        for data in masukan:
            if (nim == data.get_nim()):
                del masukan[i]
                i+= 1