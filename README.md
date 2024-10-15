# PrakWEB2 - Tugas 1
## Object Oriented Programming (OOP)

Object Oriented Programming (OOP) adalah metode pemrograman yang berorientasi pada objek. Dalam OOP, terdapat kelas dan objek yang berinteraksi satu sama lain untuk menciptakan suatu program. Kelas digunakan untuk mendefinisikan struktur dan perilaku objek, sedangkan objek adalah instansiasi dari kelas tersebut.

### Istilah Dasar dalam OOP

- **Objek**: Benda yang memiliki data dan perilaku tertentu, misalnya motor atau pesawat.
- **Kelas**: Blueprint atau template untuk membuat objek yang mendefinisikan properti dan tindakan yang akan dimiliki objek dari kelas tersebut.
- **Metode**: Fungsi yang diasosiasikan dengan suatu objek dan digunakan untuk menentukan perilaku objek tersebut.
- **Atribut**: Variabel yang dikaitkan dengan suatu objek dan digunakan untuk merepresentasikan keadaan objek tersebut.

### Konsep Dasar OOP

- **Encapsulation**: Menyembunyikan data dan hanya memperbolehkan akses melalui metode tertentu.
- **Inheritance**: Konsep di mana sebuah kelas dapat mewarisi sifat dan perilaku dari kelas lain.
- **Polymorphism**: Konsep di mana metode yang sama dapat memiliki perilaku yang berbeda pada kelas yang berbeda.
- **Abstraction**: Menghilangkan detail yang tidak perlu untuk memfokuskan pada fitur penting dari objek.

## JobSheet 1

### Instruksi Kerja

1. Pembuatan Class dan Object
   - Membuat class `Mahasiswa` yang memiliki atribut `nama`, `nim`, dan `jurusan`.

### Contoh Implementasi

Berikut adalah contoh implementasi kelas `Mahasiswa` dalam PHP:

```php
<?php
// Definisi class Mahasiswa
class Mahasiswa {
    // Properti public untuk menyimpan data mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    // Konstruktor untuk inisialisasi objek
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan informasi mahasiswa
    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . "\n";
        echo "NIM: " . $this->nim . "\n";
        echo "Jurusan: " . $this->jurusan . "\n";
    }
}

// Contoh penggunaan class Mahasiswa
$mahasiswa1 = new Mahasiswa("Budi", "123456", "Teknik Informatika");
$mahasiswa1->tampilkanInfo();
?>
