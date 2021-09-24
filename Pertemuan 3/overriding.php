<?php

class produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
          
       
         

           public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
               $this->judul = $judul;
               $this->penulis = $penulis;
               $this->penerbit = $penerbit;
               $this->harga = $harga;
               
           }

           public function getLabel(){
               return "$this->penulis, $this->penerbit";

           }

           public function getInfoProduk() {
            $str = "{$this->judul} / {$this->getLabel()} (Rp. {$this->harga})";

            return $str;

            }
}
           
class Komik extends Produk
    public $jmlHalaman;
$judul = "judul", $penulis = "penulis", $penerbit = 
    public function __construct("penerbit", $harga = 0, $jmlHalaman = 0) {
    
    parent: : __construct($judul, $penulis, $penerbit, $harga = 0, $jmlHalaman = 0) ;

    $this->jmlHalaman = $jmlHalaman;

    }

    public function getInfoProduk(){
        $str = "Komik : " . parent : : getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    } 

}
 
class Game extends Produk { 
    public $waktuMain


    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) }
    parent: :__construct($judul, $penulis, $penerbit, $harga = 0, $waktuMain = 0);
    
    $this->waktuMain $waktuMain;
    public function getInfoProduk() {
    $str = "Game : " . parent : : getInfoProduk() . " - {$this->waktuMain} Jam.";
    return $str;
    }

}




class CetakInfoproduk {
    public function cetak( produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100, 0,
 "Komik");
$produk2 = new Game("uncharted", "Neil Druckman", "Sony Computer", 25000, 0, 50, 
 "Game");

 echo $produk1->getInfoLengkap();
 echo "<br>";
 echo $produk2->getInfoLengkap();



