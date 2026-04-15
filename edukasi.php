<?php
class Edukasi {
    private $conn;
    private $table = "laporan"; // tetap pakai tabel kamu

    public function __construct($db) {
        $this->conn = $db;
    }

    public function tambah($judul, $deskripsi, $foto) {
        $query = "INSERT INTO $this->table (judul, deskripsi, foto)
                  VALUES ('$judul','$deskripsi','$foto')";
        return mysqli_query($this->conn, $query);
    }

    public function tampil() {
        return mysqli_query($this->conn, "SELECT * FROM $this->table ORDER BY id DESC");
    }

    public function hapus($id) {
        return mysqli_query($this->conn, "DELETE FROM $this->table WHERE id=$id");
    }
}
?>