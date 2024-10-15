<?php
//definisi class Mahasiswa
class Mahasiswa {
    //properti public untuk menyimpan data mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    //menampilkan data tentang mahasiswa
    public function tampilkanData() {
        return "Mahasiswa bernama $this->nama dengan NIM $this->nim dari jurusan $this->jurusan.";
    }
}

//instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa();
$mahasiswa->nama = "Gerin Nurul";
$mahasiswa->nim = "230202061";
$mahasiswa->jurusan = "Teknik Informatika";
//memanggil fungsi tampilkanData untuk menampilkan informasi mahasiswa
echo $mahasiswa->tampilkanData();
?>