<?php

$hariIni = new DateTime();

echo $hariIni->format('d-m-Y H:i') . '<br>';

echo "<hr>";

$hariIni = new DateTime("2020-02-10 14:53"); 
$awalFebruari = new DateTime("1st February 2020 01:00"); 

echo $hariIni->format('d-m-Y H:i') . '<br>';
echo $awalFebruari->format('d-m-Y H:i') . '<br>';

echo "<hr>";

$hariIni = new DateTime();

echo $hariIni->format('l F Y, H:i') . '<br>';
echo $hariIni->format('D M y, H:i') . '<br>';
echo $hariIni->format('d-m-Y, h:iA') . '<br>';


echo "<hr>";

$hariIni = new DateTime("2020-12-31");

echo "Tanggal: " . $hariIni->format('d-m-Y') . '<br>';
echo "Timestamp: " . $hariIni->getTimestamp() . " <br>";

echo "<hr>";

$timestamp = 1234567890;

$hariIni = new DateTime();
$hariIni->setTimestamp($timestamp);

echo "Timestamp: {$timestamp} <br>";
echo "Tanggal: " . $hariIni->format('d-m-Y') . '<br>';

echo "<hr>";

$tanggal1 = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$tanggal2 = new DateTime('now', new DateTimeZone('America/Regina'));

echo "Tanggal 1: " . $tanggal1->format("d-m-Y H:i") . "<br>";
echo "Tanggal 2: " . $tanggal2->format("d-m-Y H:i") . "<br>";

echo "<hr>";

$hariIni = new DateTime("01-01-2020");
$tigaHariLagi = (clone $hariIni)->modify("+3 days");
$semingguLagi = (clone $hariIni)->modify("+1 week");
$tujuhMingguLagi = (clone $hariIni)->modify("+7 weeks");
$duaBulanLagi = (clone $hariIni)->modify("+2 months");
$limaBelasTahunLagi = (clone $hariIni)->modify("+15 years");

echo $hariIni->format("d-m-Y") . "<br>";
echo $tigaHariLagi->format("d-m-Y") . "<br>";
echo $semingguLagi->format("d-m-Y") . "<br>";
echo $tujuhMingguLagi->format("d-m-Y") . "<br>";
echo $duaBulanLagi->format("d-m-Y") . "<br>";
echo $limaBelasTahunLagi->format("d-m-Y") . "<br>";

echo "<hr>";

$hariIni = new DateTime("01-01-2020");
$tigaHariYangLalu = (clone $hariIni)->modify("-3 days");
$semingguYangLalu = (clone $hariIni)->modify("-1 week");

echo $hariIni->format("d-m-Y") . "<br>";
echo $tigaHariYangLalu->format("d-m-Y") . "<br>";
echo $semingguYangLalu->format("d-m-Y") . "<br>";

echo "<hr>";

$tanggal1 = new DateTime("2020-01-01");
$tanggal2 = new DateTime("2020-01-31");

if ($tanggal1 < $tanggal2) {
    echo $tanggal1->format("d-m-Y") . " < " . $tanggal2->format("d-m-Y");
} elseif ($tanggal1 === $tanggal2) {
    echo $tanggal1->format("d-m-Y") . " = " . $tanggal2->format("d-m-Y");
} else {
    echo $tanggal1->format("d-m-Y") . " > " . $tanggal2->format("d-m-Y");
}