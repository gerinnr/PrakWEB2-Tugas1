<?php
//definisi class Person
class Person {
    protected $nama;
    //construct digunakan untuk inisialisasi properti
    //construct adalah metode khusus yang dijalankan saat objek dibuat
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
    //metode getter untuk mengambil nilai atribut $getNama
    public function getNama() {
        return "Student: " . $this->nama;
    }
    //metode getter untuk mengambil nilai atribut $studentID
    public function getStudentID() {
        return "Student ID: " . $this->studentID;
    }
}
//definisi class Teacher yang merupakan turunan dari class Person
class Teacher extends Person {
    private $teacherID;

    public function __construct($nama, $teacherID) {
        parent::__construct($nama);
        $this->teacherID = $teacherID;
    }

    public function getNama() {
        return "Teacher: " . $this->nama;
    }

    public function getTeacherID() {
        return "Teacher ID: " . $this->teacherID;
    }
}
//instansiasi objek Student
$student = new Student("Leviathan", "230202061");
//instansiasi objek Teacher
$teacher = new Teacher("Cikgu Jasmine", "19280397481");

//menampilkan informasi menggunakan getter
echo $student->getnama() . "<br>";
echo $student->getStudentID() . "<br><br>";
echo $teacher->getNama() . "<br>";
echo $teacher->getTeacherID() . "<br>";

?>