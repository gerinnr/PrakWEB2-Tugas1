<?php
//definisi class Pengguna
class Pengguna {
    //atribut nama bersifat protected, hanya bisa diakses oleh class turunannya
    protected $nama;
    //construct untuk class Pengguna
    public function __construct($nama) {
        $this->nama = $nama;
    }
    //metode getter untuk mengambil nilai dari atribut $nama
    public function getNama() {
        return $this->nama;
    }
}
//definisi class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna {
    //atribut mata kuliah bersifat private, bisa diakses hanya dari dalam class Dosen
    private $mataKuliah;

    //construct untuk class Dosen, menerima parameter $nama dan $mataKuliah
    //constructor ini memanggil construct dari class Pengguna 
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);//memanggil construct kelas pengguna
        $this->mataKuliah = $mataKuliah;
    }
    //metode getter untuk mengambil nilai atribut $mataKuliah
    public function getMataKuliah() {
        return $this->mataKuliah;
    }
    //metode setter untuk mengubah nilai atribut $mataKuliah
    public function setMataKuliah($mataKuliah) {
        $this->mataKuliah = $mataKuliah;
    }
}
//instansiasi objek dari class Dosen 
$dosen = new Dosen("Andi Prasetyo", "Matematika");
//menampilkan data Dosen menggunakan metode getter
echo "Nama Dosen: " . $dosen->getNama() . "<br>";
echo "Mata Kuliah: " . $dosen->getMataKuliah(); 
?>