<?php
//definisi class Person
class Person {
    protected $nama;
    //construct digunakan untuk inisialisasi properti
    public function __construct($nama) {
        $this->nama = $nama;
    }
    //metode getter untuk mengambil nilai atribut $nama
    public function getNama() {
        return $this->nama;
    }
}
//definisi class Student yang merupakan turunan dari class Person
class Student extends Person {
    //mendeklarasikan atribut dengan akses public, sehingga dapat diakses dari luar class
    public $studentID;

    //construct untuk class Student, menerima parameter $nama dan $studentID
    //constructor ini memanggil construct dari class Person
    public function __construct($nama, $studentID) {
        parent::__construct($nama);
        $this->studentID = $studentID;
    }
    //metode getter untuk mengambil nilai atribut $studentID
    public function getStudentID() {
        return $this->studentID;
    }
}
//instansiasi objek
$student = new Student("Leviathan", "230202061");
?>