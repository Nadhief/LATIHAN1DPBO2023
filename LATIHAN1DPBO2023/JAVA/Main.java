
import java.util.Scanner;

import javax.print.event.PrintJobListener;

import java.util.ArrayList;

public class Main
{
	public static void main(String[] args)
	{
		int i, n = 0;
		String name;
		String nim;
		String ps;
		String fakultas;

		ArrayList<Mhs> list = new ArrayList<>();
		Mhs temp = new Mhs();
		
		Scanner sc = new Scanner(System.in);			
			Crud crud = new Crud();
			int z;
		do {
			System.out.println("=================================");
			System.out.println("0. Keluar Program");
			System.out.println("1. Input data Mahasiswa");
			System.out.println("2. Ubah data Mahasiswa");
			System.out.println("3. Hapus data Mahasiswa");
			System.out.println("4. Menampilkan data Mahasiswa");
			System.out.println("=================================");
			System.out.print("Masukkan menu: ");
			
			z = sc.nextInt();
			if(z != 0)
			{
				if(z == 1)
				{
					temp = new Mhs();
					System.out.println("Masukan data Mahasiswa: ");
					name = sc.next();	
					nim = sc.next();
					ps = sc.next();
					fakultas = sc.next();
					
					temp.setName(name);
					temp.setNim(nim);
					temp.setPs(ps);
					temp.setFakultas(fakultas);
					
					crud.mashok(list, temp);
					// list.add(temp);
					System.out.println("Data berhasil ditambahkan!");
				}
				else if(z == 2)
				{
					System.out.println("Masukan Nim yang akan diubah: ");
					nim = sc.next();
					crud.ubah(nim, list);
				}
				else if(z == 3)
				{
					System.out.println("Masukan Nim yang akan dihapus: ");
					nim = sc.next();
					crud.hapus(nim, list);
				}
				else if(z == 4)
				{
					System.out.println("\nList Mahasiswa setelah di update: ");
					crud.ingpomaseh(list);
				}
				// System.out.println("");
			}
		} while (z != 0);
	
		sc.close();
	}
}