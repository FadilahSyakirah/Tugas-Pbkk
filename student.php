<?php
// File: Student.php

// Mengimpor kelas Person
require_once 'Person.php';

class Student extends Person {
    // Atribut tambahan
    private $studentId;

    // Konstruktor kelas Student
    public function __construct($name, $age, $studentId) {
        parent::__construct($name, $age); // Memanggil konstruktor kelas induk
        $this->studentId = $studentId;
    }

    // Metode untuk mendapatkan ID mahasiswa
    public function getStudentId() {
        return $this->studentId;
    }

    // Override metode displayInfo untuk menampilkan informasi tambahan
    public function displayInfo() {
        parent::displayInfo(); // Memanggil metode displayInfo dari kelas Person
        echo "<br>" . "Npm : " . $this->studentId . "<br>" ;
    }
}
