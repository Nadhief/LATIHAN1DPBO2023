// import library dan file
#include <bits/stdc++.h>
// #include "Mhs.cpp"
#include "Crud.cpp"

//menggunakan standarad namespace
using namespace std;

int main()
{
    /* deklarasi variabel*/
    int i, n = 0;
    string name;
    string nim;
    string ps;
    string fakultas;

    Crud crud;//-> deklrasi class crud
    list<Mhs> llist;//-> deklrasri class dalam list
    Mhs data; //-> deklrasi class Mahasiswa

    cin >> n; //-> inputan banyak nya data yg diinputkan
    for (i = 0; i < n; i++)
    {

        cin >> name >> nim >> ps >> fakultas;//-> input nama, nim, program studi, fakultras
        /* mengubah data sesuai inputan */
        data.set_name(name);
        data.set_nim(nim);
        data.set_ps(ps);
        data.set_fakultas(fakultas);

        crud.input(data, &llist);
    }

    /*nge print list mahasiswa*/
    cout << "List Mahasiswa : " << '\n';
    i = 0;
    for(list<Mhs>::iterator it = llist.begin(); it != llist.end(); it++)
    {
        cout << (i + 1) << ". " << it->get_name() << " " << it->get_nim() << " " << it->get_ps() << " " << it->get_fakultas() << '\n';
        i++;
    }

    int x;//-> variabel untuk milih ubah atau hapus
    cout << "Menu : "<< '\n';
    cout << "1. Ubah"<< '\n';
    cout << "2. Hapus"<< '\n';
    cin >> x;//-> input x

    if (x == 1)//-> jika 1 maka ubah
    {
        cout << "masukan nim yang akan diubah : " << '\n';
        cin >> nim;
        crud.ubah(nim, &llist);
    }
    else if(x == 2)//-> jika 2 maka hapus
    {
        cout << "masukan nim yang akan dihapus : " << '\n';
        cin >> nim;
        crud.hapus(nim, &llist);
    }
    /*nge print list mahasiswa*/
    cout << "List Mahasiswa : " << '\n';
    i = 0;
    for(list<Mhs>::iterator it = llist.begin(); it != llist.end(); it++)
    {
        cout << (i + 1) << ". " << it->get_name() << " " << it->get_nim() << " " << it->get_ps() << " " << it->get_fakultas() << '\n';
        i++;
    }
    return 0;
}