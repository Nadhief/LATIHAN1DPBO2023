<?php

class Human
{
	private $name = '';
	private $gender = '';
	private $nim = '';
	private $ps = '';
	private $fakultas = '';
	private $foto = '';

	/* konstruktor menggunakan parameter */
	public function __construct($name = '', $gender = '', $nim = '', $ps = '', $fakultas = '', $foto = '')
	{
		$this->name = $name;
		$this->gender = $gender;
		$this->nim = $nim;
		$this->ps = $ps;
		$this->fakultas = $fakultas;
		$this->foto = $foto;
	}
	/* start getter setter atribut */
	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setGender($gender)
	{
		$this->gender = $gender;
	}

	public function getGender()
	{
		return $this->gender;
	}

	public function setNim($nim)
	{
		$this->nim = $nim;
	}

	public function getNim()
	{
		return $this->nim;
	}

	public function setPs($ps)
	{
		$this->ps = $ps;
	}

	public function getPs()
	{
		return $this->ps;
	}

	public function setFakultas($fakultas)
	{
		$this->fakultas = $fakultas;
	}

	public function getFakultas()
	{
		return $this->fakultas;
	}
	/* end getter setter atribut */


	public function setFoto($foto)
	{
		$this->foto = $foto;
	}

	public function getFoto()
	{
		return $this->foto;
	}
	
}

?>