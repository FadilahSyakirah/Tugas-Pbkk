<?php
// File: Person.php

class Person {
    // Atribut
    private $name;
    private $age;

    // Konstruktor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Metode untuk mendapatkan nama
    public function getName() {
        return $this->name;
    }

    // Metode untuk mendapatkan usia
    public function getAge() {
        return $this->age;
    }

    // Metode untuk menampilkan informasi
    public function displayInfo() {
        echo "Nama: "  . $this->name ."<br>". " Usia: "  . $this->age . " tahun" ;
    }
}

