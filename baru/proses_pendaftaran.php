<?php

    class mahasiswa{
        public $nama;
        public $email;
        public $password;

        function __construct($nama, $email, $password){
            $this-> nama = $nama;
            $this-> email = $email;
            $this-> password = $password;

        }

        function tampilBiodata(){
            echo $this->nama ."<br />";
            echo $this->email ."<br />";
            echo $this->password ."<br />";
        }

        function validasi(){

        }
    }

    $mahasiswa = new mahasiswa();

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pasword = $_POST['password'];

    echo "$nama <br />";
    echo "$email <br />";
    echo "$password <br />";

    if($nama == ""){
        echo "Masukin Nama";
        die();
    }



?>
