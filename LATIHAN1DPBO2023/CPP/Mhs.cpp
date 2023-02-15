//import library
#include <iostream>
#include <string>

// menggunakan standard namespace
using namespace std;

// deklarasi class human
class Mhs
{
    // atribut privat
    private:
        string name;
        string nim;
        string ps;
        string fakultas;
    
    // metode publik
    public:
        /*konstruktor*/
        Mhs() //-> konstruktor tanpa parameter
        {
            // set variabel name dan gender ke default
            this->name = "";
            this->nim = "";
            this->ps = "";
            this->fakultas = "";
        }
        /*Getter dan Setter*/

        // get name
        string get_name()
        {
            return this->name;
        }
        // set name
        void set_name(string name)
        {
            this->name = name;
        }
        // get nim
        string get_nim()
        {
            return this->nim;
        }
        // set gender
        void set_nim(string nim)
        {
            this->nim = nim;
        }
        // get program_studi
        string get_ps()
        {
            return this->ps;
        }
        // set program_studi
        void set_ps(string ps)
        {
            this->ps = ps;
        }
        // get fakultas
        string get_fakultas()
        {
            return this->fakultas;
        }
        // set fakultas
        void set_fakultas(string fakultas)
        {
            this->fakultas = fakultas;
        }
        /*end getter dan setter*/
        
        /*desktruktor*/
        ~Mhs() //-> default destruktor
        {

        }
};
