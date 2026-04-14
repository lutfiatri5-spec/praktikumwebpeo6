<?php
class Mobil {
    public function maju() {
        echo "Mobil bergerak maju";
    }

    public function berhenti() {
        echo "Mobil berhenti";
    }

    public function belok($arah) {
        echo "Mobil berbelok ke " . $arah;
    }
}

// Membuat objek dari class Mobil
$myCar = new Mobil();

// Memanggil method
$myCar->maju();
$myCar->berhenti();
$myCar->belok("kanan");
?>