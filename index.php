<?php

class BangunDatar {

    // 1. Luas Persegi
    public function luasPersegi($sisi) {
        return $sisi * $sisi;
    }

    // 2. Keliling Persegi
    public function kelilingPersegi($sisi) {
        return 4 * $sisi;
    }

    // 3. Luas Persegi Panjang
    public function luasPersegiPanjang($panjang, $lebar) {
        return $panjang * $lebar;
    }

    // 4. Keliling Persegi Panjang
    public function kelilingPersegiPanjang($panjang, $lebar) {
        return 2 * ($panjang + $lebar);
    }

    // 5. Luas Segitiga
    public function luasSegitiga($alas, $tinggi) {
        return 0.5 * $alas * $tinggi;
    }

    // 6. Keliling Segitiga
    public function kelilingSegitiga($a, $b, $c) {
        return $a + $b + $c;
    }

    // 7. Luas Lingkaran
    public function luasLingkaran($r) {
        return pi() * $r * $r;
    }

    // 8. Keliling Lingkaran
    public function kelilingLingkaran($r) {
        return 2 * pi() * $r;
    }

    // 9. Luas Jajar Genjang
    public function luasJajarGenjang($alas, $tinggi) {
        return $alas * $tinggi;
    }

    // 10. Keliling Jajar Genjang
    public function kelilingJajarGenjang($alas, $sisi) {
        return 2 * ($alas + $sisi);
    }

    // 11. Luas Trapesium
    public function luasTrapesium($a, $b, $tinggi) {
        return 0.5 * ($a + $b) * $tinggi;
    }

    // 12. Keliling Trapesium
    public function kelilingTrapesium($a, $b, $c, $d) {
        return $a + $b + $c + $d;
    }

    // 13. Luas Belah Ketupat
    public function luasBelahKetupat($d1, $d2) {
        return 0.5 * $d1 * $d2;
    }

    // 14. Keliling Belah Ketupat
    public function kelilingBelahKetupat($sisi) {
        return 4 * $sisi;
    }

    // 15. Luas Layang-Layang
    public function luasLayangLayang($d1, $d2) {
        return 0.5 * $d1 * $d2;
    }

    // 16. Keliling Layang-Layang
    public function kelilingLayangLayang($a, $b) {
        return 2 * ($a + $b);
    }
}

// Membuat objek
$bangun = new BangunDatar();

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Bangun Datar</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: auto;
        }

        .card {
            background: white;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 5px #ccc;
        }

        h2 {
            color: #2563eb;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Kalkulator Bangun Datar</h1>

    <div class="card">
        <h2>1. Persegi</h2>
        <p>Luas: <?= $bangun->luasPersegi(5); ?></p>
        <p>Keliling: <?= $bangun->kelilingPersegi(5); ?></p>
    </div>

    <div class="card">
        <h2>2. Persegi Panjang</h2>
        <p>Luas: <?= $bangun->luasPersegiPanjang(10, 5); ?></p>
        <p>Keliling: <?= $bangun->kelilingPersegiPanjang(10, 5); ?></p>
    </div>

    <div class="card">
        <h2>3. Segitiga</h2>
        <p>Luas: <?= $bangun->luasSegitiga(10, 6); ?></p>
        <p>Keliling: <?= $bangun->kelilingSegitiga(5, 6, 7); ?></p>
    </div>

    <div class="card">
        <h2>4. Lingkaran</h2>
        <p>Luas: <?= round($bangun->luasLingkaran(7), 2); ?></p>
        <p>Keliling: <?= round($bangun->kelilingLingkaran(7), 2); ?></p>
    </div>

    <div class="card">
        <h2>5. Jajar Genjang</h2>
        <p>Luas: <?= $bangun->luasJajarGenjang(10, 5); ?></p>
        <p>Keliling: <?= $bangun->kelilingJajarGenjang(10, 6); ?></p>
    </div>

    <div class="card">
        <h2>6. Trapesium</h2>
        <p>Luas: <?= $bangun->luasTrapesium(8, 12, 5); ?></p>
        <p>Keliling: <?= $bangun->kelilingTrapesium(8, 12, 5, 6); ?></p>
    </div>

    <div class="card">
        <h2>7. Belah Ketupat</h2>
        <p>Luas: <?= $bangun->luasBelahKetupat(10, 8); ?></p>
        <p>Keliling: <?= $bangun->kelilingBelahKetupat(5); ?></p>
    </div>

    <div class="card">
        <h2>8. Layang-Layang</h2>
        <p>Luas: <?= $bangun->luasLayangLayang(10, 6); ?></p>
        <p>Keliling: <?= $bangun->kelilingLayangLayang(5, 8); ?></p>
    </div>

</div>

</body>
</html>