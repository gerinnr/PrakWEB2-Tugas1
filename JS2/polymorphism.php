<?php
//definisi class Pengguna, merepresentasikan pengguna umum dalam sistem
class Pengguna {
    //atribut protected, hanya bisa diakses oleh kelas ini dan kelas turunannya
    protected $nama;
    //construct menginisialisasi objek
    public function __construct($nama) {
        $this->nama = $nama;
    }
    //metode aksesFitur untuk memberikan informasi pengguna
    public function aksesFitur() {
        return "Pengguna " . $this->nama . " memiliki akses fitur sebagai Anonim. ";
    }
}

//definisi class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna {
    //atribut mata kuliah bersifat private, bisa diakses hanya dari dalam class Dosen
    private $mataKuliah;

    //construct untuk class Dosen, menerima parameter $nama dan $mataKuliah
    //constructor ini memanggil construct dari class Pengguna 
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);//memanggil construct kelas pengguna untuk menginisalisasi nama
        $this->mataKuliah = $mataKuliah;
    }
    //metode untuk mengakses fitur khusus Dosen
    public function aksesFitur(){
        return "Dosen " . $this->nama . " bertanggung jawab untuk membimbing mahasiswa dalam mata kuliah " . $this->mataKuliah . ".";
    }
    }
//definisi class Mahasiswa yang mewarisi class Pengguna
class Mahasiswa extends Pengguna {
    //atribut nim dan jurusan bersifat private, bisa diakses hanya dari dalam class Mahasiswa
    private $nim;
    private $jurusan;

    //construct untuk class Mahasiswa, menerima parameter $nama, $nim, $jurusan
    public function __construct($nama, $nim, $jurusan) {
        parent::__construct($nama);//memanggil construct kelas pengguna untuk menginisalisasi nama
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    //metode untuk mengakses fitur khusus Mahasiswa
    public function aksesFitur() {
        return "Mahasiswa " . $this->nama . " dengan NIM " . $this->nim . " bertanggung jawab untuk menyelesaikan tugas yang diberikan oleh dosen.";
    }
}
//instansiasi objek dari class Dosen
$dosen = new Dosen("Andi Prasetyo", "Matematika");
//memanggil metode aksesFitur pada objek Dosen dan mencetak outputnya
echo $dosen->aksesFitur();
echo "<br><br>";
//instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa("Gerin Nurul", "230202061", "Teknik Informatika");
//memanggil metode aksesFitur pada objek Mahasiswa dan mencetak outputnya
echo $mahasiswa->aksesFitur();
?>