import java.util.ArrayList;
import java.util.Scanner;

public class Crud {
    /* konstruktor tanpa parameter */
    public Crud()
    {
    
    }
    /* method crud */
    public void ubah(String nim, ArrayList<Mhs> list)
    {
        Scanner sc = new Scanner(System.in);

        // /* deklrasi variabel nama, nim yang diubah, program studi, dan fakultas*/
        String name;
        String nimubah;
        String ps;
        String fakultas;

        int i = 0;
        /* perulangan */
        for(i = 0; i < list.size(); i++)
        {
            if(nim.equals(list.get(i).getNim()))
            {
                System.out.println("Berhasil menemukan NIM, silahkan masukan data yang ingin diubah!");
                name = sc.next();
                nimubah = sc.next();
                ps = sc.next();
                fakultas = sc.next();
    

                list.get(i).setName(name);
                list.get(i).setNim(nimubah);
                list.get(i).setPs(ps);
                list.get(i).setFakultas(fakultas);
            }
        }
    }
    public void hapus(String nim, ArrayList<Mhs> list)
    {
        int i;
        for(i = 0; i < list.size(); i++)
        {
            if(nim.equals(list.get(i).getNim()))
            {
                list.remove(list.get(i));
            }
        }
    }
    public void mashok(ArrayList<Mhs> list, Mhs temp)
    {
        list.add(temp);
    }
    public void ingpomaseh(ArrayList<Mhs> list)
    {
        int i = 0;
        for(i = 0; i < list.size(); i++)
        {
        	System.out.println(Integer.toString(i + 1) + ". " + list.get(i).getName() + " " + list.get(i).getNim() + " " + list.get(i).getPs() + " "+list.get(i).getFakultas());
        }

    }
}
