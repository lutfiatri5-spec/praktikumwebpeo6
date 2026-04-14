<?php
class Mobil {
    public $merk; // Bisa diakses dari mana saja
    private $kecepatanMaksimum; // Hanya bisa diakses dalam kelas ini
    protected $jumlahPintu; // Bisa diakses dalam kelas ini dan kelas turunannya

    public function __construct($merk, $kecepatan, $pintu) {
        $this->merk = $merk;
        $this->kecepatanMaksimum = $kecepatan;
        $this->jumlahPintu = $pintu;
    }

    public function getKecepatanMaksimum() {
        return $this->kecepatanMaksimum; // Mengakses properti private melalui metode dalam kelas
    }

    protected function getJumlahPintu() {
        return $this->jumlahPintu; // Mengakses properti protected
    }
}

// Membuat objek Mobil
$mobil1 = new Mobil("Toyota", 180, 4);
echo "Merk Mobil : " . $mobil1->merk . "<br>"; // Bisa diakses karena public
echo "Kecepatan Maksimum: " . $mobil1->getKecepatanMaksimum() . " km/jam<br>";
// Menggunakan method public untuk mengakses properti private

// $mobil1->kecepatanMaksimum; // ERROR: Tidak bisa diakses langsung karena private
// $mobil1->jumlahPintu; // ERROR: Tidak bisa diakses langsung karena protected
?>