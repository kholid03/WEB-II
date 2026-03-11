<?php

class User {

    protected $nama;
    protected $email;

    public function __construct($nama,$email){
        $this->nama = $nama;
        $this->email = $email;
    }

    public function tampilUser(){
        echo "Nama : " . $this->nama . "<br>";
        echo "Email : " . $this->email . "<br>";
    }
}

// class Mahasiswa
class Mahasiswa extends User {

    private $nim;

    public function __construct($nama,$email,$nim){
        parent::__construct($nama,$email);
        $this->nim = $nim;
    }

    public function tampilMahasiswa(){
        $this->tampilUser();
        echo "NIM : " . $this->nim . "<br>";
    }
}

// class Dosen
class Dosen extends User {

    private $nidn;

    public function __construct($nama,$email,$nidn){
        parent::__construct($nama,$email);
        $this->nidn = $nidn;
    }

    public function tampilDosen(){
        $this->tampilUser();
        echo "NIDN : " . $this->nidn . "<br>";
    }
}


// Membuat object
$mhs = new Mahasiswa("Rina","rina@email.com","2212345");
$dosen = new Dosen("Pak Budi","budi@email.com","987654");

echo "<h3>Data Mahasiswa</h3>";
$mhs->tampilMahasiswa();

echo "<br>";

echo "<h3>Data Dosen</h3>";
$dosen->tampilDosen();

?>