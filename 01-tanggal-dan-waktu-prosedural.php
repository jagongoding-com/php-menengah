<?php

echo date('d-m-Y'); // 17-02-2019
echo '<br>';

$tanggalHariIni = new DateTime();

echo $tanggalHariIni->format('d-m-Y'); // 17-02-2019

echo "<hr>";

echo date('d/m/Y') . '<br>';
echo date('d-m-Y') . '<br>';
echo date('d, m Y') . '<br>';

# anda juga bisa menggunakan escape string
echo date('d \wk\wk m \wk\wk Y') . '<br>';

echo "<hr>";

$timeStampSekarang = time();
echo $timeStampSekarang;

echo "<hr>";

$timestamp = 1234567890;
$stringDate = date('d-m-Y H:i', $timestamp);

echo "Timestamp: {$timestamp} <br>";
echo "String date: {$stringDate} <br>";

echo "<hr>";

echo strtotime("now") . '<br>'; # timestime untuk waktu sekarang
echo strtotime("2020-12-31") . '<br>'; # timestamp untuk tanggal 31 Desember 2020
echo strtotime("2020-12-31 12:00") . '<br>'; # timestamp untuk tanggal 31 Desember 2020 pukul 12:00

echo "<hr>";

echo strtotime("05th maret 2004") . '<br>'; # untuk tanggal 5 Maret 2004
echo strtotime("next sunday") . '<br>'; # hari minggu yang akan datang
echo strtotime("previous friday") . '<br>'; # hari jumat yang lalu
echo strtotime("+2 days") . '<br>'; # 2 hari lagi

echo date("d-m-Y", strtotime("05th maret 2004")) . '<br>';
echo date("d-m-Y", strtotime("next sunday")) . '<br>';
echo date("d-m-Y", strtotime("previous friday")) . '<br>';
echo date("d-m-Y", strtotime("+2 days")) . '<br>';

echo "<hr>";

date_default_timezone_set("America/Regina") . '<br>';

echo date("d-m-Y H:i") . '<br>';

// ganti ke indonesia
date_default_timezone_set("Asia/Jakarta") . '<br>';

echo date("d-m-Y H:i");

echo "<hr>";

$tanggal1 = "2020-01-01";
$tanggal2 = "2020-01-31";

if ($tanggal1 < $tanggal2) {
    echo "{$tanggal1} < {$tanggal2}";
} elseif ($tanggal1 === $tanggal2) {
    echo "{$tanggal1} = {$tanggal2}";
} else {
    echo "{$tanggal1} > {$tanggal2}";
}

echo "<hr>";
$tanggal1 = "2020-02-01";
$tanggal2 = "2020-01-31";

if (strtotime($tanggal1) < strtotime($tanggal2)) {
    echo "{$tanggal1} < {$tanggal2}";
} elseif ($tanggal1 === $tanggal2) {
    echo "{$tanggal1} = {$tanggal2}";
} else {
    echo "{$tanggal1} > {$tanggal2}";
}

echo "<hr>";

$daftarTimezone = DateTimeZone::listIdentifiers();

foreach ($daftarTimezone as $timezone) {
  echo "{$timezone} <br>";
}

