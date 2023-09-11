<?php
// File: Teacher.php

// Mengimpor kelas Person
require_once 'Person.php';

class Teacher extends Person {
    // Atribut tambahan
    private $employeeId;

    // Konstruktor kelas Teacher
    public function __construct($name, $age, $employeeId) {
        parent::__construct($name, $age); // Memanggil konstruktor kelas induk
        $this->employeeId = $employeeId;
    }

    // Metode untuk mendapatkan ID karyawan
    public function getEmployeeId() {
        return $this->employeeId;
    }

    // Override metode displayInfo untuk menampilkan informasi tambahan
    public function displayInfo() {
        parent::displayInfo(); // Memanggil metode displayInfo dari kelas Person
        echo  "<br>" . "Nip: " . $this->employeeId  ;
    }
}
