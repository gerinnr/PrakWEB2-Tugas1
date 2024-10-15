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
Mendefinisikan sebuah class bernama Mahasiswa, yang berfungsi sebagai blueprint untuk membuat objek mahasiswa. Class ini memiliki tiga properti publik sebagai berikut: <br>
- `nama` menyimpan nama Mahasiswa <br>
- `nim` menyimpan NIM Mahasiswa <br>
- `jurusan` menyimpan jurusan Mahasiswa <br>

   - Membuat metode tampilkanData() dalam class Mahasiswa

```php
//menampilkan data tentang mahasiswa
    public function tampilkanData() {
        return "Mahasiswa bernama $this->nama dengan NIM $this->nim dari jurusan $this->jurusan.";
    }
```
Terdapat metode tampilkanData() yang mengembalikan string berisi informasi lengkap tentang mahasiswa berdasarkan nilai yang diberikan pada properti tersebut.

   - Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.

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
Setelah mendefinisikan class, selanjutnya menginstansiasi objek dari class `Mahasiswa`. Dimulai dengan mendeklarasikan variabel yang kemudian diisi dengan objek baru dari class tersebut. Setelah objek dibuat dan mengisi properti dengan data, selanjutnya memanggil metode tampilkanData() untuk menampilkan infromasi lengkap tentang mahasiswa.

**Output** : <br>
<img width="479" alt="image" src="https://github.com/user-attachments/assets/602a8788-be77-402e-98f3-fc3e96da8f2b">

**2. Implementasi Construcor**
   - Menambahkan constructor pada kelas `Mahasiswa` yang akan menginisialisasi atribut nama, nim dan jurusan.
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

Setelah mendefinisikan construct, selanjutnya menginstansiasi objek baru dari class `Mahasiswa` dan memberikan nilai untuk ketiga parameter tersebut. Langkah terakhir adalah memanggil metode tampilkanData() pada objek yang telah dibuat untuk menampilkan informasi mahasiswa.

<b>Output :</b><br>
<img width="463" alt="image" src="https://github.com/user-attachments/assets/f5b06cea-cfe8-4c37-9b87-25c6b2c087e2">

**3. Membuat Metode Tambahan**
   - Membuat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan 
perubahan jurusan.
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
1. Mendeklarasikan class Mahasiswa. Class ini berfungsi sebagai blueprint untuk objek mahasiswa.
2. Mendefinisikan tiga properti publik. Properti ini akan menyimpan data setiap mahasiswa.
3. Membuat constructor `__construct`yang akan dipanggil saat objek akan diinstansiasi.
4. Membuat metode tampilkanData yang mengembalikan sebuah string berisi informasi mahasiswa.
5. Membuat metode updateJurusan() yang menerima satu parameter untuk memperbarui nilai dari properti jurusan.
6. Setelah mendefinisikan class dan metode selanjutnya menginstansiasi objek baru dari class Mahasiswa dengan memberikan nilai untuk nama, nim dan jurusan..
7. Memanggil metode tampilkanData() untuk menampilkan informasi awal tentang mahasiswa.
8. Gunakan metode updateJurusan() untuk mengubah jurusan yang ingin diubah.
9. Panggil kembali metode tampilkanData untuk menampilkan informasi mahasiswa setelah jurusan diperbarui.

 **Output** : <br>
<img width="475" alt="image" src="https://github.com/user-attachments/assets/f6eb0961-6690-4d1b-8d3d-23d2ca428694">

**4. Penggunaan Atribut dan Metode**
   - Mengubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
   - Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode tampilkanData(). <br>
   
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
1. Mendeklarasikan class Mahasiswa. Class ini berfungsi sebagai blueprint untuk objek mahasiswa.
2. Mendefinisikan tiga properti publik. Properti ini akan menyimpan data setiap mahasiswa.
3. Membuat constructor `__construct`yang akan dipanggil saat objek akan diinstansiasi.
4. Membuat metode tampilkanData yang mengembalikan sebuah string berisi informasi mahasiswa.
5. Membuat metode updateJurusan() yang menerima satu parameter untuk memperbarui nilai dari properti jurusan.
6. Membuat metode setter `setNim()` untuk mengubah nilai properti nim setelah objek diinstansiasi.
7. Setelah mendefinisikan class dan metode selanjutnya menginstansiasi objek baru dari class Mahasiswa dengan memberikan nilai untuk nama, nim dan jurusan.
8. Memanggil metode tampilkanData() untuk menampilkan informasi awal tentang mahasiswa.
9. Gunakan metode updateJurusan() untuk mengubah jurusan yang ingin diubah.
10. Memanggil metode setter `setNim()` untuk mengubah NIM mahasiswa.
11. Panggil kembali metode tampilkanData untuk menampilkan informasi mahasiswa setelah NIM diperbarui.

**Output** : <br>
<img width="479" alt="image" src="https://github.com/user-attachments/assets/5d94d9a8-0e3b-4b18-992e-7c00c0cb4402">

### Tugas JS1
1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk 
menampilkan informasi tersebut.

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
   Mendefinisikan class Dosen dengan mengumpulkan data dan fungsi yang berkaitan dengan dosen.<br>
**b. Atribut**<br>
   Dalam class Dosen, terdapat tiga atribut :<br>
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
   - Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.<br>
```php
<?php
//definisi class Mahasiswa
class Mahasiswa {
    //properti public untuk menyimpan data mahasiswa
    public $nama;
    public $nim;
    public $jurusan;
```
Mendefinisikan sebuah class bernama Mahasiswa, yang berfungsi sebagai blueprint untuk membuat objek mahasiswa. Class ini memiliki tiga properti publik sebagai berikut: <br>

   - Buat metode tampilkanData() dalam class Mahasiswa.<br>
```php
//menampilkan data mahasiswa dalam format string
    public function tampilkanData() {
        //mengembalikan string yang berisi informasi mahasiswa
        return "Mahasiswa bernama $this->nama dengan NIM $this->nim dari jurusan $this->jurusan.";
    }
```
Terdapat metode tampilkanData() yang mengembalikan string berisi informasi lengkap tentang mahasiswa berdasarkan nilai yang diberikan pada properti tersebut.

   - Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.<br>
```php
//instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa();
$mahasiswa->nama = "Gerin Nurul";
$mahasiswa->nim = "230202061";
$mahasiswa->jurusan = "Teknik Informatika";
//memanggil fungsi tampilkanData untuk menampilkan informasi mahasiswa
echo $mahasiswa->tampilkanData();
```
Setelah mendefinisikan class, selanjutnya menginstansiasi objek dari class `Mahasiswa`. Dimulai dengan mendeklarasikan variabel yang kemudian diisi dengan objek baru dari class tersebut. Setelah objek dibuat dan mengisi properti dengan data, selanjutnya memanggil metode tampilkanData() untuk menampilkan infromasi lengkap tentang mahasiswa.

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
Mendefinisikan class Mahasiswa yang berfungsi untuk merepresentasikan data seorang mahasiswa. Di dalam class terdapat tiga atribut atau properti seperti `$nama`, `$nim` dan `$jurusan` yang semuanya ditetapkan sebagai private.
    - Membuat metode getter dan setter untuk atribut nama, nim dan jurusan.
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
Menambahkan getter dan setter ke dalam class Mahasiswa, dengan mendefinisikan metode getter untuk masing-masing atribut. Metode ini berfungsi untuk mengambil nilai dari atribut yang bersifat private, sehingga meskipun atribut tersebut tidak dapat diakses langsung di luar class tetap bisa mendapatkan nilainya melalui metode ini.

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

   - Membuat class Pengguna dengan atribut nama dan metode getNama().
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
Mendefinisikan class Pengguna yang berfungsi untuk merepresentasikan data pengguna. Menetapkan atribut $nama dengan akses modifier protected yang berarti atribut ini hanya bisa diakses oleh class Pengguna sendiri dan class yang mewarisinya.

Selanjutnya mendefinisikan construct yang akan diaktifkan saat objek Pengguna diinstansiasi. Kemudian, menambahkan metode getNama() yang berfungsi sebagai getter untuk mengambil nilai dari atribut $nama.


   - Membuat class Dosen yang mewarisi class Pengguna dan tambahkan atribut 
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
Mendefinisikan class Dosen yang mewarisi class Pengguna dengan menggunakan keyword extends. Selanjutnya, menambahkan atribut $mataKuliah dalam class Dosen yang bersifat private. Hal ini berarti bahwa atribut tersebut hanya dapat diakses dan dimodifikasi dari dalam class Dosen itu sendiri. 
   - Instansiasi objek dari class Dosen dan tampilkan data dosen.
