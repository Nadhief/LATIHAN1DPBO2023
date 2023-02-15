#include <iostream>
#include <string>
#include "Mhs.cpp"
#include <list>
using namespace std;

// deklrasi class Crud
class Crud
{
    public:
        /* konstruktor */
		Crud()
		{

		}
        /* method ubah dan hapus */
		void input(Mhs data, list<Mhs> *llist)
		{
			llist->push_back(data);//-> addlast
		}
		void ubah(string nim, list<Mhs> *llist)
		{
            /* deklrasi variabel nama, nim yang diubah, program studi, dan fakultas*/
			string name;
			string nimubah;
			string ps;
			string fakultas;
            /* perulangan untuk ngecek list dari awal sampe akhir*/
			for(list<Mhs>::iterator it = llist->begin(); it != llist->end(); it++)
			{
				if(nim == it->get_nim()) //-> ngecek apakah ada nim yang sama, jika ada maka data tersebut diubah
				{
					cin >> name >> nimubah >> ps >> fakultas; //-> minta inputan nama, nim, program studi, dan fakultas yang baru
					/* mengubah data sesuai inputan */
                    it->set_name(name);
					it->set_nim(nimubah);
					it->set_ps(ps);
					it->set_fakultas(fakultas);
				}
			}
		}
		void hapus(string nim, list<Mhs> *llist)
		{
            /* perulangan untuk ngecek list dari awal sampe akhir*/
			for(list<Mhs>::iterator it = llist->begin(); it != llist->end(); it++)
				{
					if(nim == it->get_nim())//-> ngecek apakah nim yang di hapus ada di list atau ngga
					{
						it = llist->erase(it);//-> jalanin fungsi hapus
						it--;//-> degradasi
					}
				}
		}
        /* destruktor */
		~Crud()
		{

		}

};