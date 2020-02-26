<?php

require 'file-01.php';
require 'file-02.php';

echo "file-utama.php <br>";
echo "Nama: {$nama} <br><br>";

echo "<hr>";

$a = 5;
$b = 3;

function luas () {
  global $a, $b;

  $b = $a + $b;
}

luas();

echo "a = {$a} <br>";
echo "b = {$b} <br>";

echo "<hr>";

function tes () {
  static $a = 0; # mendefinisikan variabel lokal

  echo "a: {$a} <br>";

  $a++; # increment variabel lokal
}

tes();
tes();
tes();
