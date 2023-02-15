<?php

class Crud
{
   private $list = array(); // deklar atribat tipenya array

	public function __construct($list)
    {
       $this->list = $list;
    }

    public function input($name, $gender , $nim , $ps, $fakultas, $foto)
    {
        $oke = new Human($name, $gender , $nim , $ps, $fakultas, $foto); // instansiasi human (buat object human) parameter ahrus sesuai sama construct
        array_push($this->list, $oke); // parameter push itu pertama variabel list nya lalu object si human nya
    }
    public function ubah($nim, $name, $gender , $nimbaru , $ps, $fakultas, $foto)
    // ('Najwa Laila  Farida ', 'Female ', '2106413', 'Akuntansi ', 'FEB');
    {
        for ($x = 0; $x < sizeof($this->list); $x++) 
        {
            if($this->list[$x]->getNim() == $nim)
            {
                // echo "masuk";
                $this->list[$x]->setName($name);
                $this->list[$x]->setGender($gender);
                $this->list[$x]->setNim($nimbaru);
                $this->list[$x]->setPs($ps);
                $this->list[$x]->setFakultas($fakultas);
                $this->list[$x]->setFoto($foto);
                // echo '<hr>';

                // $Mhs1 = new Human('Najwa Laila  Farida ', 'Female ', '2006418 ', 'Akuntansi ', 'FEB');
            }
        } 
    }
    public function hapus($nim)
	{
		for ($x = 0; $x < sizeof($this->list); $x++) 
        {
            if($this->list[$x]->getNim() == $nim)
            {
                array_splice($this->list, $x, 1);
            }
        }
	}
    public function tampil()
    {
        echo "<table border='3'>";
        echo "<tr>
            <th> Nama </th>
            <th> NIM </th>
            <th> Program Studi </th>
            <th> Fakultas </th>
            <th> Foto </th>
            </tr>";
        for($x = 0; $x < sizeof($this->list); $x++){
            echo "<tr><td>";
            echo $this->list[$x]->getName();
            echo "</td><td>";
            echo $this->list[$x]->getNim();
            echo "</td><td>";
            echo $this->list[$x]->getPs();
            echo "</td><td>";
            echo $this->list[$x]->getFakultas();
            echo "</td><td>";
            echo "<img src='" . $this->list[$x]->getFoto(). "'style='width: 200px'>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>