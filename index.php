<?php
// File: index.php

// Mengimpor kelas Student dan Teacher
require_once 'Student.php';
require_once 'Teacher.php';

// Membuat objek Student
$student = new Student("Ioshi Junika", 20, "G1A021022");

// Membuat objek Teacher
$teacher = new Teacher("Siti Zubaidah", 35, "G1A021002");

// Menampilkan informasi
echo "Informasi Mahasiswa: ". "<br>" ;
$student->displayInfo();
echo "<br>";

echo "Informasi Dosen: ". "<br>";
$teacher->displayInfo();
