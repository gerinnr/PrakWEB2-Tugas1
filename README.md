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

**1. Pembuatan Class dan Object**
   - Membuat class `Mahasiswa` yang memiliki atribut `nama`, `nim`, dan `jurusan`.

```php
<?php
// Definisi class Mahasiswa
class Mahasiswa {
    // Properti public untuk menyimpan data mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    }
?>
```
Mendefinisikan sebuah class bernama `Mahasiswa`, yang berfungsi sebagai blueprint untuk membuat objek mahasiswa. Class ini memiliki tiga properti publik sebagai berikut: <br>
- `nama` menyimpan nama Mahasiswa <br>
- `nim` menyimpan NIM Mahasiswa <br>
- `jurusan` menyimpan jurusan Mahasiswa <br>

   - Membuat metode `tampilkanData()` dalam class `Mahasiswa`

```php
//menampilkan data tentang mahasiswa
    public function tampilkanData() {
        return "Mahasiswa bernama $this->nama dengan NIM $this->nim dari jurusan $this->jurusan.";
    }
```
Terdapat metode `tampilkanData()` yang mengembalikan string berisi informasi lengkap tentang mahasiswa berdasarkan nilai yang diberikan pada properti tersebut.

   - Instansiasi objek dari class `Mahasiswa` dan tampilkan data mahasiswa tersebut.

```php
//instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa();
$mahasiswa->nama = "Gerin Nurul";
$mahasiswa->nim = "230202061";
$mahasiswa->jurusan = "Teknik Informatika";
//memanggil fungsi tampilkanData untuk menampilkan informasi mahasiswa
echo $mahasiswa->tampilkanData();
?>
```
Setelah mendefinisikan class, selanjutnya menginstansiasi objek dari class `Mahasiswa`. Dimulai dengan mendeklarasikan variabel yang kemudian diisi dengan objek baru dari class tersebut. Setelah objek dibuat dan mengisi properti dengan data, selanjutnya memanggil metode `tampilkanData()` untuk menampilkan infromasi lengkap tentang mahasiswa.

**Output** : <br>
<img width="479" alt="image" src="https://github.com/user-attachments/assets/602a8788-be77-402e-98f3-fc3e96da8f2b">

**2. Implementasi Constructor**
   - Menambahkan constructor pada kelas `Mahasiswa` yang akan menginisialisasi atribut `nama`, `nim` dan `jurusan`.
```php
//constructor untuk menginisialisasi objek mahasiswa
    public function __construct($nama, $nim, $jurusan) {
        $this->nama    = $nama;
        $this->nim     = $nim;
        $this->jurusan = $jurusan;
    }
```

Constructor adalah metode khusus yang dipanggil saat objek diinstansiasi dan berfungsi untuk menginisialisasi properti objek. Dalam hal ini, constructor menerima tiga parameter yaitu `$nama`, `$nim` dan `$jurusan` yang kemudian digunakan untuk mengisi properti objek menggunakan `$this->nama`, `$this->nim` dan `$this->jurusan`.

   - Gunakan construct ini untuk mengatur nilai awal dari atribut saat objek dibuat.
```php
//instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa("Gerin Nurul", "230202061", "Teknik Informatika");
//memanggil fungsi tampilkanData untuk menampilkan informasi mahasiswa
echo $mahasiswa->tampilkanData();
```

Setelah mendefinisikan construct, selanjutnya menginstansiasi objek baru dari class `Mahasiswa` dan memberikan nilai untuk ketiga parameter tersebut. Langkah terakhir adalah memanggil metode `tampilkanData()` pada objek yang telah dibuat untuk menampilkan informasi mahasiswa.

<b>Output :</b><br>
<img width="463" alt="image" src="https://github.com/user-attachments/assets/f5b06cea-cfe8-4c37-9b87-25c6b2c087e2">

**3. Membuat Metode Tambahan**
   - Membuat metode `updateJurusan()` dalam kelas `Mahasiswa` yang memungkinkan perubahan jurusan.
   - Gunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.

```php
<?php
//deklarasi class Mahasiswa
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
}
//instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa("Gerin Nurul", "230202061", "Teknik Informatika");
//memanggil fungsi tampilkanData untuk menampilkan informasi mahasiswa
echo $mahasiswa->tampilkanData();
//memperbarui jurusan mahasiswa
$mahasiswa->updateJurusan("Komputer dan Bisnis");
//memanggil fungsi tampilkanData untuk menampilkan informasi mahasiswa
echo $mahasiswa->tampilkanData();
?>
```
 **Langkah-langkah Membuat Class**
Mendeklarasikan kelas `Mahasiswa`, yang berfungsi sebagai blueprint untuk objek mahasiswa. Kelas ini kemudian didefinisikan dengan tiga properti publik, yaitu `nama`, `nim`, dan `jurusan`, yang akan menyimpan data setiap mahasiswa. Selanjutnya, konstruktor `__construct` dibuat untuk menginisialisasi properti-properti tersebut saat objek diinstansiasi. Setelah itu, metode `tampilkanData` ditambahkan, yang mengembalikan sebuah string berisi informasi lengkap mengenai mahasiswa. Kelas ini juga mencakup metode `updateJurusan()`, yang menerima satu parameter untuk memperbarui nilai dari properti jurusan. Setelah semua komponen kelas didefinisikan, objek baru dari kelas `Mahasiswa` diinstansiasi dengan memberikan nilai untuk `nama`, `nim`, dan `jurusan`. Metode `tampilkanData()` kemudian dipanggil untuk menampilkan informasi awal tentang mahasiswa. Selanjutnya, metode `updateJurusan()` digunakan untuk mengubah jurusan mahasiswa sesuai dengan kebutuhan. Terakhir, metode `tampilkanData()` dipanggil kembali untuk menampilkan informasi mahasiswa setelah jurusan diperbarui, sehingga memungkinkan untuk melihat perubahan yang telah dilakukan.

 **Output** : <br>
<img width="475" alt="image" src="https://github.com/user-attachments/assets/f6eb0961-6690-4d1b-8d3d-23d2ca428694">

**4. Penggunaan Atribut dan Metode**
   - Mengubah nilai atribut `nim` dari objek Mahasiswa menggunakan metode setter.
   - Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode `tampilkanData()`. <br>
   
      **Metode Setter** merupakan sebuah fungsi dalam pemrograman berorientasi objek yang digunakan untuk mengatur atau set nilai dari properti atau atribut suatu objek.

```php
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
```

 **Langkah-langkah Membuat Class**
Mendeklarasikan kelas `Mahasiswa`, yang berfungsi sebagai blueprint untuk objek mahasiswa. Kelas ini didefinisikan dengan tiga properti publik: `nama`, `nim`, dan `jurusan`, yang akan menyimpan data setiap mahasiswa. Selanjutnya, dibuatlah konstruktor `__construct` yang dipanggil saat objek diinstansiasi untuk menginisialisasi ketiga properti tersebut. Kemudian, metode `tampilkanData()` ditambahkan, yang mengembalikan sebuah string berisi informasi lengkap mengenai mahasiswa. Selain itu, metode `updateJurusan()` dibuat untuk menerima satu parameter guna memperbarui nilai dari properti `jurusan`, serta metode setter `setNim()` untuk mengubah nilai properti `nim` setelah objek diinstansiasi. Setelah mendefinisikan kelas dan metode, objek baru dari kelas `Mahasiswa` diinstansiasi dengan memberikan nilai untuk `nama`, `nim`, dan `jurusan`. Metode `tampilkanData()` kemudian dipanggil untuk menampilkan informasi awal tentang mahasiswa. Selanjutnya, metode `updateJurusan()` digunakan untuk mengubah jurusan mahasiswa sesuai kebutuhan, diikuti dengan pemanggilan metode setter `setNim()` untuk mengubah NIM mahasiswa. Terakhir, metode `tampilkanData()` dipanggil kembali untuk menampilkan informasi mahasiswa setelah NIM diperbarui, sehingga perubahan yang dilakukan dapat terlihat dengan jelas.

**Output** : <br>
<img width="479" alt="image" src="https://github.com/user-attachments/assets/5d94d9a8-0e3b-4b18-992e-7c00c0cb4402">

### Tugas JS1
1. Implementasikan kelas `Dosen` dengan atribut `nama`, `nip`, dan `mataKuliah`.
2. Buat metode `tampilkanDosen()` untuk menampilkan informasi dosen.
3. Buat objek dari kelas `Dosen`, dan gunakan metode `tampilkanDosen()` untuk menampilkan informasi tersebut.

    **Input** :

```php
   <?php 
//definisi class Dosen
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

    //menampilkan data tentang mahasiswa
    public function tampilkanDosen() {
        return "Dosen bernama $this->nama dengan NIP $this->nip mengampu mata kuliah $this->mataKuliah.";
    }
}

//instansiasi objek dari class Mahasiswa
$dosen = new Dosen();
$dosen->nama = "Yeji";
$dosen->nip = "310501100001";
$dosen->mataKuliah = "Algoritma dan Pemrograman";
//memanggil fungsi tampilkanData untuk menampilkan informasi mahasiswa
echo $dosen->tampilkanDosen();
?>
```

**a. Class**<br>
   Mendefinisikan class `Dosen` dengan mengumpulkan data dan fungsi yang berkaitan dengan dosen.<br>
**b. Atribut**<br>
   Dalam class `Dosen`, terdapat tiga atribut :<br>
   `$nama` = menyimpan nama dosen <br>
   `$nip`  = menyimpan NIP dosen <br>
   `$mataKuliah` = menyimpan mata kuliah yang diampu dosen <br>
**c. Metode** <br>
   `tampilkanDosen()` : metode ini mengembalikan string yang berisi informasi lengkap tentang dosen, termasuk nama, NIP dan mata kuliah yang di ampu.

**Output** : <br>
<img width="475" alt="image" src="https://github.com/user-attachments/assets/0116d56f-f299-477f-9359-21ee68bd2bef">


## JobSheet 2

### Instruksi Kerja

**1. Pembuatan Class dan Object**<br>
   - Buat class `Mahasiswa` yang memiliki atribut `nama`, `nim`, dan `jurusan`.<br>
   
```php
<?php
//definisi class Mahasiswa
class Mahasiswa {
    //properti public untuk menyimpan data mahasiswa
    public $nama;
    public $nim;
    public $jurusan;
```
Mendefinisikan sebuah class bernama `Mahasiswa`, yang berfungsi sebagai blueprint untuk membuat objek mahasiswa. Class ini memiliki tiga properti publik sebagai berikut: <br>

   - Buat metode `tampilkanData()` dalam class `Mahasiswa`.<br>
```php
//menampilkan data mahasiswa dalam format string
    public function tampilkanData() {
        //mengembalikan string yang berisi informasi mahasiswa
        return "Mahasiswa bernama $this->nama dengan NIM $this->nim dari jurusan $this->jurusan.";
    }
```
Terdapat metode `tampilkanData()` yang mengembalikan string berisi informasi lengkap tentang mahasiswa berdasarkan nilai yang diberikan pada properti tersebut.

   - Instansiasi objek dari class `Mahasiswa` dan tampilkan data mahasiswa tersebut.<br>
```php
//instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa();
$mahasiswa->nama = "Gerin Nurul";
$mahasiswa->nim = "230202061";
$mahasiswa->jurusan = "Teknik Informatika";
//memanggil fungsi tampilkanData untuk menampilkan informasi mahasiswa
echo $mahasiswa->tampilkanData();
```
Setelah mendefinisikan class, selanjutnya menginstansiasi objek dari class `Mahasiswa`. Dimulai dengan mendeklarasikan variabel yang kemudian diisi dengan objek baru dari class tersebut. Setelah objek dibuat dan mengisi properti dengan data, selanjutnya memanggil metode `tampilkanData()` untuk menampilkan infromasi lengkap tentang mahasiswa.

**Full Code** :
```php
<?php
//definisi class Mahasiswa
class Mahasiswa {
    //properti public untuk menyimpan data mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    //menampilkan data mahasiswa dalam format string
    public function tampilkanData() {
        //mengembalikan string yang berisi informasi mahasiswa
        return "Mahasiswa bernama $this->nama dengan NIM $this->nim dari jurusan $this->jurusan.";
    }
}

//instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa();
$mahasiswa->nama = "Gerin Nurul";
$mahasiswa->nim = "230202061";
$mahasiswa->jurusan = "Teknik Informatika";
//memanggil fungsi tampilkanData untuk menampilkan informasi mahasiswa
echo $mahasiswa->tampilkanData();
?>
```

**Output** :<br>
<img width="476" alt="image" src="https://github.com/user-attachments/assets/9b4f8ae9-8780-4ef4-ad4f-528f131f7747">

**2. Encapsulation**<br>
Enkapsulasi adalah salah satu prinsip utama dalam pemrograman berorientasi objek yang berkaitan dengan pengelolaan data. Konsep ini mengacu pada praktik menyembunyikan detail internal suatu objek dan hanya menyediakan akses melalui metode tertentu. Dengan kata lain, enkapsulasi memungkinkan untuk mengontrol bagaimana data diakses dan dimodifikasi. <br>

Tujuan utama dari enkapsulasi adalah untuk melindungi data dari akses langsung yang tidak diinginkan, sehingga menjaga integritas dan konsistensi informasi. 

    - Mengubah atribut dalam class Mahasiswa menjadi private.
    Atribut private adalah jenis akses modifier dalam pemrograman berbasis objek yang membatasi akses ke atribut atau properti suatu class.
    
```php
<?php 
//definisi class Mahasiswa
class Mahasiswa {
    //atribut atau properties; bersifat private, hanya bisa diakses dari dalam class
    private $nama;
    private $nim;
    private $jurusan;
```
Mendefinisikan class `Mahasiswa` yang berfungsi untuk merepresentasikan data seorang mahasiswa. Di dalam class terdapat tiga atribut atau properti seperti `$nama`, `$nim` dan `$jurusan` yang semuanya ditetapkan sebagai private.
    - Membuat metode getter dan setter untuk atribut `nama`, `nim` dan `jurusan`.
```php
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
```
Menambahkan getter dan setter ke dalam class `Mahasiswa`, dengan mendefinisikan metode getter untuk masing-masing atribut. Metode ini berfungsi untuk mengambil nilai dari atribut yang bersifat private, sehingga meskipun atribut tersebut tidak dapat diakses langsung di luar class tetap bisa mendapatkan nilainya melalui metode ini.

Selanjutnya mendefinisikan metode setter pada masing-masing atribut, metode ini digunakan untuk mengubah nilai dari atribut-atribut tersebut.

    - Demonstrasikan akses ke atribut menggunakan metode getter dan setter.
```php
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
echo "Jurusan: " . $mahasiswa->getJurusan() . "<br>"
```
Mendemonstrasikan penggunaan metode getter dan setter untuk mengakses dan memodifikasi atribut ke dalam class Mahasiswa. Setelah menginstansiasi objek mahasiswa dengan memberikan data awal, lakukan pemanggilan menggunakan metode getter untuk menampilkan informasi awal. Selanjutnya, mengubah nilai atribut menggunakan metode setter dan mengisi parameternya.

**Full Code**:
```php
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
```

**Output** :<br>
<img width="471" alt="image" src="https://github.com/user-attachments/assets/e17123f9-9830-453e-b2fa-b48137514e9d">


**3. Inheritance**<br>
   Inheritance adalah konsep di mana sebuah kelas dapat mewarisi atribut dan metode dari kelas lain. Ini memungkinkan penggunaan kembali kode dan 
menciptakan hubungan hierarkis antara kelas.

   - Membuat class `Pengguna` dengan atribut nama dan metode `getNama()`.
```php
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
```
Mendefinisikan class `Pengguna` yang berfungsi untuk merepresentasikan data pengguna. Menetapkan atribut `$nama` dengan akses modifier protected yang berarti atribut ini hanya bisa diakses oleh class Pengguna sendiri dan class yang mewarisinya.

Selanjutnya mendefinisikan construct yang akan diaktifkan saat objek Pengguna diinstansiasi. Kemudian, menambahkan metode `getNama()` yang berfungsi sebagai getter untuk mengambil nilai dari atribut $nama.


   - Membuat class `Dosen` yang mewarisi class `Pengguna dan tambahkan atribut 
mataKuliah.
```php
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
```
Mendefinisikan class `Dosen` yang mewarisi class `Pengguna` dengan menggunakan keyword extends. Selanjutnya, menambahkan atribut `$mataKuliah` dalam class `Dosen` yang bersifat private. Hal ini berarti bahwa atribut tersebut hanya dapat diakses dan dimodifikasi dari dalam class `Dosen` itu sendiri. Mendefinisikan constructor untuk class `Dosen`, memanggil dari class `Pengguna` menggunakan `parent::__construct`. Selanjutnya, menambahkan metode getter untuk mengambil nilai atribut dan juga menambahkan metode setter untuk memperbarui nilai atribut `$mataKuliah`.

   - Instansiasi objek dari class Dosen dan tampilkan data dosen.
```php
//instansiasi objek dari class Dosen 
$dosen = new Dosen("Andi Prasetyo", "Matematika");
//menampilkan data Dosen menggunakan metode getter
echo "Nama Dosen: " . $dosen->getNama() . "<br>";
echo "Mata Kuliah: " . $dosen->getMataKuliah(); 
```
Dalam bagian ini, kita menginstansiasi objek dari class `Dosen` dengan memberikan nama "Andi Prasetyo" dan mata kuliah "Matematika" melalui constructor. Proses ini akan menginisialisasi atribut `$nama` dengan memanggil constructor class `Pengguna`, dan menetapkan nilai untuk atribut `$mataKuliah`. Setelah objek $dosen dibuat, kita menggunakan metode getter untuk menampilkan informasi dosen, memanggil `getNama()` untuk mengambil dan mencetak nama dosen, dan `getMataKuliah()` untuk menampilkan mata kuliah yang diajarkan. Dengan demikian, kita berhasil menampilkan data dosen secara terstruktur, sekaligus menerapkan prinsip enkapsulasi dengan melindungi akses langsung ke atribut internal objek.

**Full Code** :
```php
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
```

**Output** :<br>
<img width="473" alt="image" src="https://github.com/user-attachments/assets/172e493d-5f1b-43ac-b7e8-96153baf4796">


**4. Polymorphism**<br>
   Polymorphism memungkinkan satu metode untuk memiliki banyak bentuk, 
biasanya melalui metode overriding di kelas turunan. Dengan ini, objek dapat diperlakukan sebagai bentuk umum dan khusus sesuai kebutuhan.

- Membuat class Pengguna dengan metode aksesFitur().
```php
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
```
Mendefinisikan class `Pengguna` yang berfungsi untuk merepresentasikan data pengguna. Menetapkan atribut `$nama` dengan akses modifier protected yang berarti atribut ini hanya bisa diakses oleh class `Pengguna` sendiri dan class yang mewarisinya.

Melalui konstruktor `__construct()`, objek kelas dapat diinisialisasi dengan nama pengguna. Metode `aksesFitur()` mengembalikan sebuah string yang memberikan informasi tentang akses pengguna, menyatakan bahwa pengguna tersebut memiliki akses fitur sebagai Anonim. Dengan demikian, kelas ini berfungsi untuk menampung informasi dasar tentang pengguna dan memberikan deskripsi terkait fitur yang dapat diaksesnya.


- Implementasikan `aksesFitur()` dengan cara berbeda di class `Dosen` dan 
`Mahasiswa`.
```php
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
```
Mengimplementasikan dua kelas turunan, `Dosen` dan `Mahasiswa`, yang mewarisi dari kelas `Pengguna`. Kelas `Dosen` memiliki atribut private `$mataKuliah`, yang hanya dapat diakses dari dalam kelas itu sendiri. Konstruktor kelas ini menerima parameter `$nama` dan `$mataKuliah`, dan memanggil konstruktor kelas induk untuk menginisialisasi nama pengguna. Metode `aksesFitur()` di kelas `Dosen` memberikan informasi khusus, menyatakan bahwa dosen bertanggung jawab membimbing mahasiswa dalam mata kuliah tertentu. Di sisi lain, kelas `Mahasiswa` memiliki dua atribut private, `$nim` dan `$jurusan`, dengan konstruktor yang menerima ketiga parameter: `$nama`, `$nim`, dan `$jurusan`, serta memanggil konstruktor kelas induk untuk inisialisasi. Metode `aksesFitur()` di kelas ini memberikan informasi bahwa mahasiswa bertanggung jawab menyelesaikan tugas yang diberikan oleh dosen. Dengan demikian, kedua kelas ini mendemonstrasikan bagaimana fitur akses dapat diimplementasikan secara berbeda berdasarkan peran pengguna dalam sistem pendidikan.


- Instansiasi objek dari class `Dosen` dan `Mahasiswa`, lalu panggil metode `aksesFitur()`.
```php
/instansiasi objek dari class Dosen
$dosen = new Dosen("Andi Prasetyo", "Matematika");
//memanggil metode aksesFitur pada objek Dosen dan mencetak outputnya
echo $dosen->aksesFitur();
echo "<br><br>";
//instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa("Gerin Nurul", "230202061", "Teknik Informatika");
//memanggil metode aksesFitur pada objek Mahasiswa dan mencetak outputnya
echo $mahasiswa->aksesFitur();
?>
Melakukan instansiasi objek dari kelas Dosen dan Mahasiswa, serta memanggil metode aksesFitur() untuk masing-masing objek. Objek Dosen diciptakan dengan nama "Andi Prasetyo" dan mata kuliah "Matematika". Setelah itu, metode aksesFitur() dipanggil, yang mencetak informasi bahwa dosen tersebut bertanggung jawab membimbing mahasiswa dalam mata kuliah yang disebutkan. Selanjutnya, objek Mahasiswa diinstansiasi dengan nama "Gerin Nurul", NIM "230202061", dan jurusan "Teknik Informatika". Metode aksesFitur() juga dipanggil untuk objek mahasiswa, yang menghasilkan informasi bahwa mahasiswa tersebut bertanggung jawab untuk menyelesaikan tugas yang diberikan oleh dosen. Dengan demikian, script ini menunjukkan bagaimana masing-masing pengguna dapat memiliki informasi dan akses fitur yang berbeda berdasarkan peran mereka dalam sistem.
```

**Full Code** :
```php
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
```

**Output** :<br>
<img width="477" alt="image" src="https://github.com/user-attachments/assets/b1a55459-22cd-4ee6-abf7-f0664dbfff7a">


**5. Abstraction**<br>
Abstraction adalah proses menyembunyikan detail implementasi internal dan 
hanya menampilkan fungsionalitas utama kepada pengguna. Ini biasanya dicapai dengan menggunakan kelas abstrak atau antarmuka.

   - Membuat class abstrak `Pengguna` dengan metode abstrak `aksesFitur()`.
```php
<?php
//definisi class Pengguna, merepresentasikan pengguna umum dalam sistem
abstract class Pengguna {
    //atribut protected, hanya bisa diakses oleh kelas ini dan kelas turunannya
    protected $nama;
    //construct menginisialisasi objek
    public function __construct($nama) {
        $this->nama = $nama;
    }
    //metode aksesFitur untuk memberikan informasi pengguna
    abstract function aksesFitur();
}
```
Kelas abstrak `Pengguna` dideklarasikan sebagai kelas abstrak menggunakan kata kunci abstrak. Dengan atribut `$nama` yang bersifat `protected`, kelas ini melindungi data agar hanya dapat diakses oleh kelas itu sendiri dan turunannya. Constructor `__construct($nama)` digunakan untuk menginisialisasi atribut saat objek dibuat, sedangkan metode abstrak `aksesFitur()` ditetapkan tanpa implementasi, sehingga setiap kelas turunan diharuskan untuk mengimplementasikannya.


   - Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan 
metode abstrak tersebut.

```php
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
```
Dalam implementasi kelas `Dosen` dan `Mahasiswa`, kedua kelas tersebut mewarisi dari kelas abstrak `Pengguna`, yang mendefinisikan metode abstrak `aksesFitur()`. Kelas Dosen memiliki atribut private `$mataKuliah`, dan dalam konstruktor, ia menerima parameter `$nama` dan `$mataKuliah`, memanggil konstruktor kelas induk untuk menginisialisasi `$nama`, dan menyimpan `$mataKuliah`. Metode `aksesFitur()` di kelas Dosen mengembalikan string yang menjelaskan tanggung jawab dosen terhadap mata kuliah yang diajarkan. Sementara itu, kelas `Mahasiswa` juga memiliki atribut private, yaitu `$nim` dan `$jurusan`, dan dalam konstruktor, ia menerima parameter `$nama`, `$nim`, dan `$jurusan`, menggunakan konstruktor kelas induk untuk menginisialisasi `$nama`. Metode `aksesFitur()` di kelas `Mahasiswa` mengembalikan string yang menjelaskan tanggung jawab mahasiswa dalam menyelesaikan tugas yang diberikan oleh dosen.


   - Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang 
diinstansiasi.
```php
//instansiasi objek dari class Dosen
$dosen = new Dosen("Andi Prasetyo", "Matematika");
//memanggil metode aksesFitur pada objek Dosen dan mencetak outputnya
echo $dosen->aksesFitur();
echo "<br><br>";
//instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa("Gerin Nurul", "230202061", "Teknik Informatika");
//memanggil metode aksesFitur pada objek Mahasiswa dan mencetak outputnya
echo $mahasiswa->aksesFitur();
```
Dalam mendemonstrasikan, lakukan instansiasi objek dari kelas `Dosen` dengan nama "Andi Prasetyo" dan mata kuliah "Matematika", menggunakan konstruktor kelas `Dosen`. Setelah objek `$dosen` dibuat, kita memanggil metode `aksesFitur()` yang mengembalikan string yang menjelaskan tanggung jawab dosen, lalu mencetak output tersebut. Selanjutnya, menginstansiasi objek dari kelas `Mahasiswa` dengan nama "Gerin Nurul", NIM "230202061", dan jurusan "Teknik Informatika". Dengan objek `$mahasiswa`, panggil metode `aksesFitur()` yang mengembalikan deskripsi tentang tanggung jawab mahasiswa dalam menyelesaikan tugas dari dosen, dan mencetak hasilnya.

**Full Code** :
```php
<?php
//definisi class Pengguna, merepresentasikan pengguna umum dalam sistem
abstract class Pengguna {
    //atribut protected, hanya bisa diakses oleh kelas ini dan kelas turunannya
    protected $nama;
    //construct menginisialisasi objek
    public function __construct($nama) {
        $this->nama = $nama;
    }
    //metode aksesFitur untuk memberikan informasi pengguna
    abstract function aksesFitur();
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
```

**Output** :<br>
<img width="473" alt="image" src="https://github.com/user-attachments/assets/9e19feea-9151-45b4-9598-be40293ddfaf">



## JobSheet 3


### Instruksi Kerja

**1. Inheritance**<br>

   - Membuat kelas Person dengan atribut name dan metode getName().
```php
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
```
Kelas Person didefinisikan dengan atribut protected bernama $nama, yang hanya dapat diakses oleh kelas itu sendiri dan kelas turunannya. Konstruktor __construct($nama) digunakan untuk menginisialisasi atribut $nama saat objek dibuat, menerima parameter yang akan disimpan sebagai nama. Selanjutnya, terdapat metode getNama() yang berfungsi sebagai getter untuk mengembalikan nilai atribut $nama.

   - Buat kelas Student yang mewarisi dari Person dan tambahkan atribut studentID serta metode getStudentID().
```php
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
```
Dalam mengimplementasikan, kelas Student didefinisikan sebagai turunan dari kelas Person, menambahkan atribut baru bernama studentID yang bersifat public, sehingga dapat diakses dari luar kelas. Konstruktor __construct($nama, $studentID) menerima dua parameter: $nama dan $studentID. Di dalam konstruktor, panggil konstruktor kelas induk (Person) untuk menginisialisasi atribut $nama, lalu menyimpan nilai $studentID. Selain itu, kelas Student juga memiliki metode getStudentID() yang berfungsi sebagai getter untuk mengembalikan nilai atribut studentID.

**Full Code** :
```php
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

//menampilkan informasi siswa
echo "Nama: " . $student->getNama() . "<br>";
echo "Student ID: " . $student->getStudentID();
?>
```
**Output** :<br>
<img width="473" alt="image" src="https://github.com/user-attachments/assets/3159f49c-45dc-4f1d-bbb1-70e858c62315">


**2. Polymorphism**<br>

   - Membuat kelas Teacher yang juga mewarisi dari Person dan tambahkan atribut teacherID.
```php
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
```
Kelas Teacher didefinisikan sebagai turunan dari kelas Person, dengan atribut baru bernama teacherID yang bersifat private, sehingga hanya dapat diakses dari dalam kelas tersebut. Konstruktor __construct($nama, $teacherID) menerima dua parameter: $nama dan $teacherID. Di dalam konstruktor, kita memanggil konstruktor kelas induk (Person) untuk menginisialisasi atribut $nama, kemudian menyimpan nilai $teacherID. Kelas ini juga memiliki metode getNama(), yang mengoverride metode di kelas induk untuk mengembalikan nama guru dengan prefiks "Teacher: ". Selain itu, metode getTeacherID() berfungsi sebagai getter untuk mengembalikan nilai atribut teacherID dengan prefiks "Teacher ID: ".

   - Override metode getName() di kelas Student dan Teacher untuk menampilkan format berbeda.
```php
//metode getter untuk mengambil nilai atribut $getNama
public function getNama() {
   return "Student: " . $this->nama;
}
//metode getter untuk mengambil nilai atribut $getNama
public function getNama() {
   return "Teacher: " . $this->nama;
}
```
Metode getNama() di kelas Student dan Teacher dioverride untuk menampilkan format yang berbeda saat mengakses nama. Pada kelas Student, metode getNama() dikustomisasi untuk mengembalikan string yang dimulai dengan "Student: ", diikuti oleh nilai atribut $nama. Begitu pula, di kelas Teacher, metode getNama() diubah untuk mengembalikan string yang dimulai dengan "Teacher: ", juga diikuti oleh nilai atribut $nama. 

**Full Code** :
```php
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
```

**Output** :<br>
<img width="476" alt="image" src="https://github.com/user-attachments/assets/f76eb5e6-3eda-48bc-8097-56baa0641638">


**3. Encapsulation**<br>

   - Mengubah atribut name dan studentID dalam kelas Student menjadi private.
```php
//definisi class Student yang merupakan turunan dari class Person
class Student extends Person {
    //mendeklarasikan atribut dengan akses private, sehingga dapat diakses dari luar class
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
```
Atribut name di kelas Student (yang diwarisi dari kelas Person) dan studentID diubah menjadi private, sehingga hanya dapat diakses dari dalam kelas tersebut. Konstruktor __construct($nama, $studentID) tetap digunakan untuk menginisialisasi atribut, dengan memanggil konstruktor kelas induk untuk menyetel nilai $name. Untuk mengakses nilai atribut studentID, metode getter getStudentID() disediakan, yang mengembalikan nilai tersebut. Selain itu, ditambahkan metode setter setStudentID($studentID) untuk memungkinkan perubahan nilai atribut studentID dari luar kelas.

   - Menambahkan metode setter dan getter untuk mengakses dan mengubah nilai atribut name dan studentID.
```php
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
    //mendeklarasikan atribut dengan akses private, sehingga dapat diakses dari luar class
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
```
Kelas Person dan kelas Student diperbarui dengan menambahkan metode setter dan getter untuk atribut nama dan studentID. Pada kelas Person, atribut $nama dideklarasikan sebagai private, dan metode getter getNama() ditambahkan untuk mengakses nilai atribut tersebut, sementara metode setter setNama($nama) memungkinkan perubahan nilai $nama dari luar kelas. Di kelas Student, atribut studentID juga dideklarasikan sebagai private, dengan metode getter getStudentID() untuk mengembalikan nilai studentID, dan metode setter setStudentID($studentID) untuk memodifikasi nilai studentID.


**Full Code** :
```php
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
    //mendeklarasikan atribut dengan akses private, sehingga dapat diakses dari luar class
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
```
**Output** :<br>
<img width="477" alt="image" src="https://github.com/user-attachments/assets/71146587-f7db-413a-a5d0-d2a8dd090880">

**4. Abstraction**<br>

   - Membuat kelas abstrak Course dengan metode abstrak getCourseDetails().
```php
<?php
//definisi abstract class Course 
abstract class Course {
    //metode abstrak yang harus diimplementasikan oleh class turunannya
    abstract public function getCourseDetails();
}
```
Menggunakan abstract untuk mendeklarasikan kelas Course, menandakan bahwa kelas ini adalah kelas abstrak yang tidak dapat diinstansiasi. Di dalam kelas Course, deklarasikan metode `getCourseDetails()` sebagai metode abstrak tanpa implementasi yang artinya setiap kelas yang mewarisi Course harus menyediakan implementasi untuk metode ini. 

   - Membuat kelas OnlineCourse dan OfflineCourse yang mengimplementasikan 
getCourseDetails() untuk memberikan detail yang berbeda.
```php
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
        return "Kursus offline dapat diikuti di Politeknik Negeri Cilacap.";
    }
}
```
Membuat kelas `OnlineCourse` yang mewarisi kelas abstrak Course. Dalam kelas ini, implementasikan getCourseDetails() untuk memberikan detail spesifik tentang kursus online. Metode ini mengembalikan string yang menjelaskan tentang kursus online. Lakukan hal yang sama untuk kelas OfflineCourse.

**Full Code** :
```php
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
        return "Kursus offline dapat diikuti di Politeknik Negeri Cilacap.";
    }
}

//instansiasi objek OnlineCourse
$onlineCourse = new OnlineCourse();
//instansiasi objek OfflineCourse
$offlineCourse = new OfflineCourse();

echo $onlineCourse->getCourseDetails() . "<br><br>";
echo $offlineCourse->getCourseDetails() . "<br>";
?>
```

**Output** : <br>
<img width="476" alt="image" src="https://github.com/user-attachments/assets/92623d5d-12df-42af-85ce-1736fa884c08">


### Tugas JS3
1. Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.
```php
<?php
//definisi class Person
class Person {
    //atribut nama bersifat protected, hanya bisa diakses oleh class turunannya
    protected $nama;
    //construct untuk class Person
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
```
   - Membuat kelas `Person` yang didefinisikan sebagai kelas dasar dengan atribut `protected` bernama `$nama`. Kelas ini dilengkapi dengan metode konstruktor yang digunakan untuk menginisialisasi atribut saat objek dibuat. Terdapat metode getter `getNama()` yang memungkinkan akses ke nilai `$nama` dan metode `getRole()` yang mengembalikan string default "Anonim".

2. Gunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya.
```php
//definisi class Dosen yang mewarisi class Person
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
```
   - Membuat kelas `Dosen` yang mewarisi kelas `Person` dan menambahkan dua atribut baru yaitu `$nidn` dan `$mataKuliah` yang bersifat private. Konstruktor kelas ini memanggil konstruktor dari kelas induk untuk inisialisasi `$nama` serta menyimpan nilai untuk `$nidn` dan `$mataKuliah`. Kelas `Dosen` mengimplementasikan metode getter dan setter untuk mengakses dan mengubah nilai dari atribut yang bersifat private. Metode `getRole()` dioverride untuk mengembalikan string "Dosen", yang memberikan konteks lebih pada objek Dosen dalam aplikasi.

   - Membuat kelas `Mahasiswa` juga mewarisi dari kelas `Person`, dengan atribut private untuk `$nim` dan `$jurusan`. Konstruktor kelas ini dirancang untuk menginisialisasi atribut dari kelas induk serta menyimpan nilai untuk `$nim` dan `$jurusan`. Seperti kelas `Dosen`, kelas ini memiliki metode getter dan setter untuk akses dan modifikasi atribut, serta metode `getRole()` yang dioverride untuk mengembalikan "Mahasiswa".
     
3. Terapkan Polymorphism dengan membuat metode getRole() di kelas Person dan override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang berbeda.
```php
<?php
//definisi class Person
class Person {
    //atribut nama bersifat protected, hanya bisa diakses oleh class turunannya
    protected $nama;
    //construct untuk class Person
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
//definisi class Dosen yang mewarisi class Person
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
```

4. Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di kelas Mahasiswa.
```php
//definisi class Dosen yang mewarisi class Person
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
```
   
5. Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan 
membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing 
memiliki cara tersendiri untuk mengelola pengajuan jurnal.
```php
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
```
   - Membuat kelas abstrak `Jurnal` berfungsi sebagai induk bagi kelas `JurnalDosen` dan `JurnalMahasiswa`. Kelas ini memiliki atribut protected untuk `$judul` dan `$pengaju`, serta konstruktor yang menginisialisasi kedua atribut tersebut. Metode `Submit()` dideklarasikan sebagai metode abstrak, yang mengharuskan setiap kelas turunan untuk memberikan implementasi spesifik.
   - Membuat kelas `JurnalDosen` dan `JurnalMahasiswa` mengimplementasikan kelas abstrak `Jurnal`. Masing-masing memiliki konstruktor yang memanggil konstruktor induk untuk inisialisasi judul dan pengaju. Metode `Submit()` diimplementasikan untuk memberikan output spesifik terkait pengajuan jurnal, dengan menyebutkan nama pengaju dan judul jurnal.<br>


**Full Code** :
```php
<?php
//definisi class Person
class Person {
    //atribut nama bersifat protected, hanya bisa diakses oleh class turunannya
    protected $nama;
    //construct untuk class Person
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
//definisi class Dosen yang mewarisi class Person
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
echo "NIDN: " . $dosen->getNidn() . "<br>";
echo "Mata Kuliah: " . $dosen->getMataKuliah() . "<br>";
echo "Role: " . $dosen->getRole() . "<br><br>";

//menampilkan data Mahasiswa menggunakan metode getter
echo "Nama Mahasiswa: " . $mahasiswa->getNama() . "<br>";
echo "NIM: " . $mahasiswa->getNim() . "<br>";
echo "Jurusan: " . $mahasiswa->getJurusan() . "<br>";
echo "Role: " . $mahasiswa->getRole() . "<br><br>";

//pengajuan JurnalDosen
$jurnalDosen = new JurnalDosen("Analisis Kontribusi Konsep Matematis pada Sawah Lodok", $dosen);
$jurnalDosen->submit();

//pengajuan JurnalMahasiswa
$jurnalMahasiswa = new JurnalMahasiswa("Algoritma dan Pemrograman", $mahasiswa);
$jurnalMahasiswa->submit();
?>
```

**Output** :<br>
<img width="476" alt="image" src="https://github.com/user-attachments/assets/04f5cbfa-337d-4bd8-850c-16826737ba49">

