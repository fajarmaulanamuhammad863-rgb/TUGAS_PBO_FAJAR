
<?php

// 1. Superclass (Parent Class)
class Rental {
    private $hargaSewaPerHari;

    // Setter untuk menentukan harga sewa
    public function setHargaSewaPerHari($harga) {
        $this->hargaSewaPerHari = $harga;
    }

    // Getter untuk mengambil harga sewa
    public function getHargaSewaPerHari() {
        return $this->hargaSewaPerHari;
    }

    // Method untuk menghitung diskon
    public function hitungDiskon($lamaSewa) {
        return 0;
    }
}

// 2. Subclass RentalMobil
class RentalMobil extends Rental {

    // 4. Method Overriding
    public function hitungDiskon($lamaSewa) {
        $totalHarga = $this->getHargaSewaPerHari() * $lamaSewa;

        if ($lamaSewa > 3) {
            return $totalHarga * 0.10;
        }

        return 0;
    }
}

// 3. Subclass RentalMotor
class RentalMotor extends Rental {

    // 4. Method Overriding
    public function hitungDiskon($lamaSewa) {
        $totalHarga = $this->getHargaSewaPerHari() * $lamaSewa;

        if ($lamaSewa > 3) {
            return $totalHarga * 0.05;
        }

        return 0;
    }
}

// 5. Instansiasi object RentalMobil
$mobil = new RentalMobil();
$mobil->setHargaSewaPerHari(300000);

$lamaSewaMobil = 5;
$totalMobil = $mobil->getHargaSewaPerHari() * $lamaSewaMobil;
$diskonMobil = $mobil->hitungDiskon($lamaSewaMobil);

echo "<h3>Rental Mobil</h3>";
echo "Harga sewa per hari: Rp " .
    number_format($mobil->getHargaSewaPerHari(), 0, ',', '.') . "<br>";
echo "Lama sewa: " . $lamaSewaMobil . " hari<br>";
echo "Total sebelum diskon: Rp " .
    number_format($totalMobil, 0, ',', '.') . "<br>";
echo "Diskon 10%: Rp " .
    number_format($diskonMobil, 0, ',', '.') . "<br>";
echo "Total pembayaran: Rp " .
    number_format($totalMobil - $diskonMobil, 0, ',', '.') . "<br>";

// Instansiasi object RentalMotor
$motor = new RentalMotor();
$motor->setHargaSewaPerHari(100000);

$lamaSewaMotor = 5;
$totalMotor = $motor->getHargaSewaPerHari() * $lamaSewaMotor;
$diskonMotor = $motor->hitungDiskon($lamaSewaMotor);

echo "<h3>Rental Motor</h3>";
echo "Harga sewa per hari: Rp " .
    number_format($motor->getHargaSewaPerHari(), 0, ',', '.') . "<br>";
echo "Lama sewa: " . $lamaSewaMotor . " hari<br>";
echo "Total sebelum diskon: Rp " .
    number_format($totalMotor, 0, ',', '.') . "<br>";
echo "Diskon 5%: Rp " .
    number_format($diskonMotor, 0, ',', '.') . "<br>";
echo "Total pembayaran: Rp " .
    number_format($totalMotor - $diskonMotor, 0, ',', '.') . "<br>";

?>
