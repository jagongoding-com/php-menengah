<?php

echo readfile('buah.txt');

echo "<hr>";

echo file_get_contents('buah.txt') . '<br>';
echo nl2br(file_get_contents('buah.txt')) . '<br>';

echo "<hr>";

$isiFileBuah = file('buah.txt');

echo '<pre>';
print_r($isiFileBuah);
echo '</pre>';

echo "<hr>";

$file = fopen('buah.txt', 'r');

if (!$file) {
  die('File tidak ada');
}

# mulai baca file
echo fread($file, filesize('buah.txt'));

# tutup file agar ia dihapus dari memory
fclose($file);

echo "<hr>";

$file = fopen('buah.txt', 'r');

if (!$file) {
  die('File tidak ada');
}

# mulai baca file
echo fgets($file) . '<br>'; # baris 1
echo fgets($file) . '<br>'; # baris 2
echo fgets($file) . '<br>'; # baris 3
echo fgets($file) . '<br>'; # baris 4
echo fgets($file) . '<br>'; # baris 5

# tutup file agar ia dihapus dari memory
fclose($file);

echo "<hr>";

$file = fopen('buah.txt', 'r');

if (!$file) {
  die('File tidak ada');
}

# lakukan perulangan selama feof bernilai false
while (!feof($file)) {
    echo fgets($file) . '<br>';
}

# tutup file agar ia dihapus dari memory
fclose($file);