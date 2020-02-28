<?php

echo "<h1>Tipe Data Juggling</h1>";

$a = "1"; /* $a adalah string */
var_dump($a); echo "<br>";
$a++; /* sekarang $a adalah integer (2) */
var_dump($a); echo "<br>";
$a .= "3"; /* sekarang $a kembali menjadi string */
var_dump($a); echo "<br>";
$a *= 0.5; /* sekarang $a berubah menjadi float */
var_dump($a); echo "<br>";

$b = 5 + "10 rumah"; /* $b menjadi integer (15) */
$c = 5 * "10kg beras dan 3 gram emas"; /* $c menjadi integer */

$d = 1 and "3"; /* $d bertipe data integer (1) */
$e = true and "5"; /* $e bertipe data boolean (true) */
$z = "a" and "b"; /* $z bertipe data string ("a") */

$f = "10" . "20.5"; /* $f bertipe data string (1020.25) */
$g = "10" + "20.5"; /* $g bertipe data float (30.25) */
$h = 10 + "20.5"; /* $h bertipe data float (30.5) */
$i = "10 beras" + 20.5; /* $i bertipe data float (30.5) */
$j = "beras 10" + 20.5; /* $j bertipe data float (20.5) */

var_dump($b); echo "<br>";
var_dump($c); echo "<br>";
var_dump($d); echo "<br>";
var_dump($e); echo "<br>";
var_dump($z); echo "<br>";
var_dump($f); echo "<br>";
var_dump($g); echo "<br>";
var_dump($h); echo "<br>";
var_dump($i); echo "<br>";
var_dump($j); echo "<br>";

echo "<hr>";

echo "<h1>Tipe Data Casting</h1>";

$a = "10 rumah"; /* $a bertipe data string ("10 rumah") */
var_dump($a); echo "<br>";
$a = (int) $a; /* $a sekarang adalah integer (10) */
var_dump($a); echo "<br>";
$a = (bool) $a; /* $a sekarang adalah boolean (true) */
var_dump($a); echo "<br>";

$b = 100; /* $b bertipe data integer (100) */
var_dump($b); echo "<br>";
$b = (string) $b; /* $b sekarang adalah string ("100") */
var_dump($b); echo "<br>";

$c = (array) $b;
var_dump($c); echo "<br>";