<?php
class Mobil { // Kelas induk (Parent Class)
    public $merk; // Properti
    public $warna;
    public function __construct($merk, $warna) { // Konstruktor
        $this->merk = $merk;
        $this->warna = $warna;
    }
    public function tampilkanInfo() { // Metode
        return "Mobil Merk: $this->merk, Warna: $this->warna";
    }
}

class MobilSport extends Mobil { // Kelas turunan (Child Class)
    public $kecepatanMaks; // Menambahkan properti khusus
    public function __construct($merk, $warna, $kecepatanMaks) { // Konstruktor
        parent::__construct($merk, $warna); // Memanggil konstruktor kelas induk
        $this->kecepatanMaks = $kecepatanMaks;
    }
    public function tampilkanInfoSport() { // Menambahkan metode khusus
        return $this->tampilkanInfo() . ", Kecepatan Maksimal: $this->kecepatanMaks km/jam";
    }
}

$mobil1 = new MobilSport("Ferrari", "Merah", 350); // Membuat objek dari kelas MobilSport
echo $mobil1->tampilkanInfoSport(); // Menampilkan informasi mobil sport
?>