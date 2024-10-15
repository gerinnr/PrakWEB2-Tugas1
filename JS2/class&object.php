<?php
//definisi class Mahasiswa
class Mahasiswa {
    //properti public untuk menyimpan data mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    //menampilkan data mahasiswa dalam format string
    public function tampilkanData() {
        //mengembalikan string yang berisi informasi mahasiswa
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