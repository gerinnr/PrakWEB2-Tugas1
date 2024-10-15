<?php
//definisi class Person
class Person {
    //deklarasi properti $nama dengan akses private, hanya bisa diakses di class ini
    private $nama;
    //construct digunakan untuk inisialisasi properti
    //construct adalah metode khusus yang dijalankan saat objek dibuat
    public function __construct($nama) {
        $this->nama = $nama;
    }
    //metode getter untuk mengambil nilai atribut $nama
    public function getNama() {
        return $this->nama;
    }
    //metode setter untuk atribut nama, untuk mengubah nilai atribut $nama
    public function setNama($nama) {
        $this->nama = $nama;
    }
}
//definisi class Student yang merupakan turunan dari class Person
class Student extends Person {
    //mendeklarasikan atribut dengan akses public, sehingga dapat diakses dari luar class
    private $studentID;

    //construct untuk class Student, menerima parameter $nama dan $studentID
    //constructor ini memanggil construct dari class Person
    public function __construct($nama, $studentID) {
        parent::__construct($nama);
        $this->studentID = $studentID;
    }
    //metode getter untuk mengambil nilai atribut $getStudentID
    public function getStudentID() {
        return $this->studentID;
    }
    //metode setter untuk atribut nama, untuk mengubah nilai atribut $studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}
//instansiasi objek Student
$student = new Student("Leviathan", "230202061");

//menampilkan informasi menggunakan getter
echo "Nama: " . $student->getNama() . "<br>";
echo "Student ID: " . $student->getStudentID() . "<br><br>";

//mengubah nilai menggunakan setter
$student->setNama("Miura");
$student->setStudentID("230302061");

//menampilkan informasi yang sudah diubah dengan metode getter
echo "Nama: " . $student->getNama() . "<br>";
echo "Student ID: " . $student->getStudentID() . "<br>";
?>