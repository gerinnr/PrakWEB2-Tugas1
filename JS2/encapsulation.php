<?php 
//definisi class Mahasiswa
class Mahasiswa {
    //atribut atau properties; bersifat private, hanya bisa diakses dari dalam class
    private $nama;
    private $nim;
    private $jurusan;

    //constructor, berfungsi untuk menginisialisasi nilai awal atribut saat objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    //getter untuk atribut nama, untuk mengambil nilai atribut $nama
    public function getNama() {
        return $this->nama;
    }
    //setter untuk atribut nama, untuk mengubah nilai atribut $nama
    public function setNama($nama) {
        $this->nama = $nama;
    }
    //getter untuk atribut nim, untuk mengambil nilai atribut $nim
    public function getNim() {
        return $this->nim;
    }
    //setter untuk atribut nim, untuk mengubah nilai atribut $nim
    public function setNim($nim) {
        $this->nim = $nim;
    }
    //getter untuk atribut jurusan, untuk mengambil nilai atribut $jurusan
    public function getJurusan() {
        return $this->jurusan;
    }
    //setter untuk atribut jurusan, untuk mengubah nilai atribut $jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

}
//instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa("Gerin Nurul", "230202061", "Komputer dan Bisnis");
//menampilkan informasi menggunakan getter
echo "<b> Data Sebelum di Ubah : </b>" . "<br>";
echo "Nama: " . $mahasiswa->getNama() . "<br>";
echo "NIM: " . $mahasiswa->getNim() . "<br>";
echo "Jurusan: " . $mahasiswa->getJurusan() . "<br><br>";

//mengubah nilai menggunakan setter
$mahasiswa->setNama("Lee Jeno");
$mahasiswa->setNim("230302061");
$mahasiswa->setJurusan("Hukum");

//menampilkan informasi yang sudah diubah dengan metode getter
echo "<b> Data Setelah di Ubah : </b>" . "<br>";
echo "Nama: " . $mahasiswa->getNama() . "<br>";
echo "NIM: " . $mahasiswa->getNim() . "<br>";
echo "Jurusan: " . $mahasiswa->getJurusan() . "<br>";
?>