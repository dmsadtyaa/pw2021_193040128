<?php

// define ('NAMA', 'Dimas Aditya');
// echo NAMA;

// echo "<br>";

// const UMUR = 19;
// echo UMUR;

// class Coba{
//     // define ('NAMA', 'Dimas Aditya');
//     const NAMA = 'Dimas';

// }

// echo Coba::NAMA;

echo __LINE__;
echo "<br>";
echo __FILE__;

echo "<br>";
function coba(){
    return __FUNCTION__;
}

echo coba();


echo "<br>";
class Coba{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj -> kelas;












?>