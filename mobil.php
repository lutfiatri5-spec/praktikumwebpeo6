<?php
class Mobil {
    public $warna;        // Properti warna
    private $merek;       // Properti merek (hanya bisa diakses dalam class)
    protected $ukuran;    // Properti ukuran (bisa diakses oleh class turunan)

    // Konstruktor untuk menginisialisasi properti
    public function __construct($warna, $merek, $ukuran) {
        $this->warna = $warna;
        $this->merek = $merek;
        $this->ukuran = $ukuran;
    }

    // Method untuk menampilkan properti
    public function getMerek() {
        return $this->merek;
    }
}

// Membuat objek dari class Mobil
$mobilBaru = new Mobil("Merah", "Toyota", "Sedang");

// Mengakses properti publik
echo "Warna mobil: " . $mobilBaru->warna;
?>