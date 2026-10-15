<?php

// Class Parent
class Profesi {
    public function bekerja() {
        return "Melakukan pekerjaan umum...";
    }
}

// Class Child 1
class Guru extends Profesi {
    // Method Overriding (menimpa method parent)
    public function bekerja() {
        return "Pergi ke kelas dan mengajar siswa SMK.";
    }
}

// Class Child 2
class Programmer extends Profesi {
    // Method Overriding
    public function bekerja() {
        return "Membuka VS Code, mengetik kode PHP, dan meminum kopi.";
    }
}
$pakGuru = new Guru();
$anakRPL = new Programmer();
echo $pakGuru->bekerja(); // output: Pergi ke kelas dan mengajar siswa SMK
echo "<br>";
echo $anakRPL->bekerja(); // outut: Membuka VS Code, mengetik kode PHP, dan meminum kopi.
?>
