<?php

class User {
    public $nama;
    public $email;

    // Constructor
    public function __construct($nama, $email){
        $this->nama = $nama;
        $this->email = $email;
    }

    public function tampilkan(){
        echo "Nama : " . $this->nama . "<br>";
        echo "Email : " . $this->email . "<br>";
    }
}

// Membuat object
$user1 = new User("Budi", "budi@email.com");
$user1->tampilkan();

?>