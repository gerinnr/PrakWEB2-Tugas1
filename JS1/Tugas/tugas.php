<?php 
//definisi class Dosen
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

    //menampilkan data tentang mahasiswa
    public function tampilkanDosen() {
        return "Dosen bernama $this->nama dengan NIP $this->nip mengampu mata kuliah $this->mataKuliah.";
    }
}

//instansiasi objek dari class Mahasiswa
$dosen = new Dosen();
$dosen->nama = "Yeji";
$dosen->nip = "310501100001";
$dosen->mataKuliah = "Algoritma dan Pemrograman";
//memanggil fungsi tampilkanData untuk menampilkan informasi mahasiswa
echo $dosen->tampilkanDosen();
?>