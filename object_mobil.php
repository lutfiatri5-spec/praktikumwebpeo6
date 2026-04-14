<?php
// Mendefinisikan class Mobil
class Mobil {
    public $warna;

    // Method untuk menetapkan warna mobil
    public function setWarna($warna) {
        $this->warna = $warna;
    }

    // Method untuk mendapatkan warna mobil
    public function getWarna() {
        return $this->warna;
    }
}

// Membuat object dari class Mobil
$mobil1 = new Mobil();
$mobil1->setWarna("Merah");

$mobil2 = new Mobil();
$mobil2->setWarna("Biru");

// Menampilkan warna mobil
echo "Warna mobil pertama: " . $mobil1->getWarna() . "<br>";
echo "Warna mobil kedua: " . $mobil2->getWarna();
?>