<?php

class User {

    private $nama;
    private $email;

    public function __construct($nama, $email){
        $this->nama = $nama;
        $this->email = $email;
    }

    // setter
    public function setNama($nama){
        $this->nama = $nama;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    // getter
    public function getNama(){
        return $this->nama;
    }

    public function getEmail(){
        return $this->email;
    }
}

// Membuat object
$user1 = new User("Andi","andi@email.com");

echo "Nama : " . $user1->getNama() . "<br>";
echo "Email : " . $user1->getEmail() . "<br>";

?>