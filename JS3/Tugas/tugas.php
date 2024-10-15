<?php
//definisi class Pengguna
class Person {
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
    public function getRole() {
        return "Anonim";
    }
}
//definisi class Dosen yang mewarisi class Pengguna
class Dosen extends Person {
    //atribut mata kuliah bersifat private, bisa diakses hanya dari dalam class Dosen
    private $nidn;
    private $mataKuliah;

    //construct untuk class Dosen, menerima parameter $nama dan $mataKuliah
    //constructor ini memanggil construct dari class Pengguna 
    public function __construct($nama, $nidn, $mataKuliah) {
        parent::__construct($nama);//memanggil construct kelas pengguna
        $this->nidn = $nidn;
        $this->mataKuliah = $mataKuliah;
    }

    public function getNidn() {
        return $this->nidn;
    }
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }
    //metode getter untuk mengambil nilai atribut $mataKuliah
    public function getMataKuliah() {
        return $this->mataKuliah;
    }
    //metode setter untuk mengubah nilai atribut $mataKuliah
    public function setMataKuliah($mataKuliah) {
        $this->mataKuliah = $mataKuliah;
    }
    public function getRole() {
        return "Dosen";
    }
}

//definisi class Mahasiswa yang mewarisi class Person
class Mahasiswa extends Person {
    //atribut nim dan jurusan bersifat private, bisa diakses hanya dari dalam class Mahasiswa
    private $nim;
    private $jurusan;

    //construct untuk class Mahasiswa, menerima parameter $nama, $nim, $jurusan
    public function __construct($nama, $nim, $jurusan) {
        parent::__construct($nama);//memanggil construct kelas pengguna untuk menginisalisasi nama
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    //metode getter untuk mengambil nilai atribut $mataKuliah
    public function getNim() {
        return $this->nim;
    }
    //metode setter untuk mengubah nilai atribut $mataKuliah
    public function setNim($nim) {
        $this->nim = $nim;
    }
    public function getJurusan() {
        return $this->jurusan;
    }
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
    public function getRole() {
        return "Mahasiswa";
    }
}

//definisi kelas abstrak Jurnal yang menjadi induk dari JurnalDosen dan JurnalMahasiswa
abstract class Jurnal {
    //atribut bersifat protected agar bisa diakses oleh class turunannya
    protected $judul;
    protected $pengaju;

    //constructor untuk menginisialisasi 
    public function __construct($judul, $pengaju) {
        $this->judul = $judul;
        $this->pengaju = $pengaju;
    }

    //deklarasi metode abstrak yang akan diimplementasikan
    abstract public function Submit();
}

//implementasi class JurnalDosen yang mewarisi Jurnal
class JurnalDosen extends Jurnal {
    public function __construct($judul, $pengaju) {
        parent::__construct($judul, $pengaju);
    }
    //implementasi metode submit khusus untuk JurnalDosen
    public function Submit() {
        echo "Dosen " . $this->pengaju->getNama() . " mengajukan jurnal dengan judul: " . $this->judul . "<br>";
    }
}

//implementasi class JurnalMahasiswa yang mewarisi Jurnal
class JurnalMahasiswa extends Jurnal {
    public function __construct($judul, $pengaju) {
        parent::__construct($judul, $pengaju);
    }
    //implementasi metode submit khusus untuk JurnalMahasiswa
    public function Submit() {
        echo "Mahasiswa " . $this->pengaju->getNama() . " mengajukan jurnal dengan judul: " . $this->judul . "<br>";
    }
} 

//instansiasi objek dari class Dosen 
$dosen = new Dosen("Andi Prasetyo", "1234567890", "Matematika");
//instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa("Gerin Nurul", "230202061", "Teknik Informatika");

//menampilkan data Dosen menggunakan metode getter
echo "Nama Dosen: " . $dosen->getNama() . "<br>";
echo "Role: " . $dosen->getRole() . "<br>";
echo "Mata Kuliah: " . $dosen->getMataKuliah() . "<br><br>";

//menampilkan data Mahasiswa menggunakan metode getter
echo "Nama Mahasiswa: " . $mahasiswa->getNama() . "<br>";
echo "Role: " . $mahasiswa->getRole() . "<br>";
echo "Jurusan: " . $mahasiswa->getJurusan() . "<br><br>";

//pengajuan JurnalDosen
$jurnalDosen = new JurnalDosen("Analisis Kontribusi Konsep Matematis pada Sawah Lodok", $dosen);
$jurnalDosen->submit();

//pengajuan JurnalMahasiswa
$jurnalMahasiswa = new JurnalMahasiswa("Algoritma dan Pemrograman", $mahasiswa);
$jurnalMahasiswa->submit();
?>