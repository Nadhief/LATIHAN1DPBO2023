public class Mhs
{
	private String name;
	private String nim;
	private String ps;
	private String fakultas;

	/* konstruktor tanpa parameter */
	public Mhs()
	{
		this.name = "";
		this.nim = "";
		this.ps = "";
		this.fakultas = "";
	}
	/*Getter dan Setter*/
	// set nama
	public void setName(String name)
	{
		this.name = name;
	}
	// get nama
	public String getName()
	{
		return this.name;
	}
	// set NIM
	public void setNim(String nim)
	{
		this.nim = nim;
	}
	// get NIM
	public String getNim()
	{
		return this.nim;
	}
	// set Program studi
	public void setPs(String ps)
	{
		this.ps = ps;
	}
	// get Program studi
	public String getPs()
	{
		return this.ps;
	}
	// set Fakultas
	public void setFakultas(String fakultas)
	{
		this.fakultas = fakultas;
	}
	// get Fakultas
	public String getFakultas()
	{
		return this.fakultas;
	}
    /*end getter dan setter*/
	public void ubah(String nim)
	{
		System.out.println("beliau ini kocak geming");
	}
}