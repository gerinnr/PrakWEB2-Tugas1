<?php
//definisi abstract class Course 
abstract class Course {
    //metode abstrak yang harus diimplementasikan oleh class turunannya
    abstract public function getCourseDetails();
}

//definisi class OnlineCourse
class OnlineCourse extends Course {
    //implementasi metode abstrak 
    public function getCourseDetails() {
        return "Kursus online dapat diikuti di platform Skill Academy.";
    }
}

class OfflineCourse extends Course {
    //implementasi metode abstrak
    public function getCourseDetails() {
        return "Kursus ofline dapat diikuti di Politeknik Negeri Cilacap.";
    }
}

//instansiasi objek OnlineCourse
$onlineCourse = new OnlineCourse();
//instansiasi objek OfflineCourse
$offlineCourse = new OfflineCourse();

echo $onlineCourse->getCourseDetails() . "<br>";
echo $offlineCourse->getCourseDetails() . "<br>";
?>