<?php
//definisi class Mahasiswa
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
    //fungsi untuk mengatur atau mengubah nim dengan metode setter
    public function setNim($nim) {
        $this->nim = $nim;
    }
}
//instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa("Gerin Nurul", "230202061", "Teknik Informatika");
//memanggil fungsi tampilkanData untuk menampilkan informasi mahasiswa
echo $mahasiswa->tampilkanData();
echo "<br>";
//memperbarui jurusan menjadi "Komputer dan Bisnis" dengan metode update
$mahasiswa->updateJurusan("Komputer dan Bisnis"); 
//memperbarui NIM menjadi "230202062" dengan metode setter
$mahasiswa->setNim("230202062");
//memanggil fungsi tampilkanData untuk menampilkan informasi mahasiswa setelah data diperbarui
echo $mahasiswa->tampilkanData();
?>