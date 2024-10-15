<?php
//deklarasi class Mahasiswa
class Mahasiswa {
    //properti public untuk menyimpan data mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    //constructor untuk menginisialisasi objek mahasiswa
    public function __construct($nama, $nim, $jurusan) {
        $this->nama    = $nama;
        $this->nim     = $nim;
        $this->jurusan = $jurusan;
    }
    //fungsi untuk menampilkan data mahasiswa
    public function tampilkanData() {
        //mengembalikan string yang menyatakan nama, nim, jurusan
        return "Mahasiswa bernama $this->nama dengan NIM $this->nim dari jurusan $this->jurusan.";
    }
    //fungsi untuk memperbarui jurusan mahasiswa
    public function updateJurusan($jurusanBaru) {
        //update variabel jurusan dengan nilai baru yang diterima 
        $this->jurusan = $jurusanBaru;
    }
}
//instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa("Gerin Nurul", "230202061", "Teknik Informatika");
//memanggil fungsi tampilkanData untuk menampilkan informasi mahasiswa
echo $mahasiswa->tampilkanData();
$mahasiswa->updateJurusan("Komputer dan Bisnis");
//memanggil fungsi tampilkanData untuk menampilkan informasi mahasiswa
echo $mahasiswa->tampilkanData();
?>