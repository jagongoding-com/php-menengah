<?php

setlocale(LC_TIME, 'id_ID.utf8');

# pendekatan prosedural
echo date('D M y, H:i') . '<br>';

# pendekatan objek
$hariIni = new DateTime();
echo $hariIni->format('l F Y, H:i') . '<br>';

echo "<hr>";

$hariIni = new DateTime();

echo $hariIni->format('l F Y, H:i') . '<br>';
echo $hariIni->format('D M y, H:i') . '<br>';

echo "<br>";

echo strftime('%A %d %B %Y, %H:%M', $hariIni->getTimestamp()) . '<br>';
echo strftime('%a %d %b %Y, %H:%M', $hariIni->getTimestamp()) . '<br>';

echo "<hr>";

function hariIndo ($hariInggris) {
    switch ($hariInggris) {
      case 'Sunday':
        return 'Minggu';
      case 'Monday':
        return 'Senin';
      case 'Tuesday':
        return 'Selasa';
      case 'Wednesday':
        return 'Rabu';
      case 'Thursday':
        return 'Kamis';
      case 'Friday':
        return 'Jumat';
      case 'Saturday':
        return 'Sabtu';
      default:
        return 'hari tidak valid';
    }
}

$hariBahasaInggris = date('l');
$hariBahasaIndonesia = hariIndo($hariBahasaInggris);

echo "Bahasa Inggris: {$hariBahasaInggris} <br>";
echo "Bahasa Indonesia: {$hariBahasaIndonesia} <br>";
