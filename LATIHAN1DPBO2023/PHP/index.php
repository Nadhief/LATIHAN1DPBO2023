<?php

require('Human.php');
require('Crud.php');

$list = array(); // tipe datanya array
$temp = new Crud($list); // instansiasi

$temp->input('Nadhief', 'Male ', '2106413', 'Ilmu Komputer ', 'FPMIPA', 'img/nadhief.jpg');
$temp->input('aceng', 'Male ', '2222222', 'Ilmu Komputer ', 'FPMIPA', 'img/aceng.jpg');
$temp->input('bayu', 'Male ', '2333333', 'Ilmu Komputer ', 'FPMIPA', 'img/bayu.jpg');
echo "mahaisswa awall bangett";
echo '<hr>';
$temp->tampil();

$temp->ubah('2333333','Najwa', 'Female ', '000000', 'Akuntansi ', 'FEB', 'img/najwa.jpg');
echo "mahaisswa udah di ubah";
echo '<hr>';
$temp->tampil();
$temp->hapus('2222222');
echo "mahaisswa udah di hapus";
echo '<hr>';
$temp->tampil();



// $Mhs[0] = new Human('Nadhief ', 'Male ', '2106413 ', 'Ilmu Komputer ', 'FPMIPA');
// echo $Mhs1->getName();
// echo $Mhs1->getNim();
// echo $Mhs1->getPs();
// echo $Mhs1->getFakultas();
// echo '<hr>';
// $Mhs[1] = new Human('Satria ', 'Male ', '2106414 ', 'Ilmu Komputer ', 'FPMIPA ');
// echo $Mhs2->getName();
// echo $Mhs2->getNim();
// echo $Mhs2->getPs();
// echo $Mhs2->getFakultas();
// echo '<hr>';
// $Mhs[2] = new Human('Aceng ', 'Male ', '2106415 ', 'Ilmu Komputer ', 'FPMIPA ');
// echo $Mhs3->getName();
// echo $Mhs3->getNim();
// echo $Mhs3->getPs();
// echo $Mhs3->getFakultas();
// echo '<hr>';
// $Mhs[3] = new Human('Ihsan ', 'Male ', '2106416 ', 'Ilmu Komputer ', 'FPMIPA ');
// echo $Mhs4->getName();
// echo $Mhs4->getNim();
// echo $Mhs4->getPs();
// echo $Mhs4->getFakultas();
// echo '<hr>';
// $Mhs[4] = new Human('Azka ', 'Male ', '2106417 ', 'Ilmu Komputer ', 'FPMIPA ');
// echo $Mhs5->getName();
// echo $Mhs5->getNim();
// echo $Mhs5->getPs();
// echo $Mhs5->getFakultas();
// echo '<hr>';


// $Mhs1 = new Human('Nadhief ', 'Male ', '2106413 ', 'Ilmu Komputer ', 'FPMIPA');
// echo $Mhs->getName();
// echo $Mhs->getNim();
// echo $Mhs->getPs();
// echo $Mhs->getFakultas();
// $Mhs = new Human('Bayu ', 'Male ', '2106413 ', 'Ilmu Komputer ', 'FPMIPA');
// $temp->input($Mhs);
// $Mhs = new Human('Kanyut ', 'Male ', '2106413 ', 'Ilmu Komputer ', 'FPMIPA');
// $temp->input($Mhs, $list);
?>