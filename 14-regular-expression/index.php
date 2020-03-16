<?php

require_once 'fungsi/deteksi-email.php';
require_once 'fungsi/deteksi-hashtag.php';
require_once 'fungsi/deteksi-kode-spesial-whatsapp.php';
require_once 'fungsi/deteksi-username.php';

$teks1 = "Dihimbau agar seluruh masyarakat waspada akan #virus #corona yang akhir-akhir ini mulai menyebar.";

echo deteksiHashtag($teks1);

echo "<hr>";

$teks2 = "Pak @jokowi telah menyampaikan #pidato yang berisi #himbauan kepada masyarakat untuk tidak banyak beraktifitas di luar rumah demi mencegah tersebarnya #virus #korona.";

echo deteksiUsername(
  deteksiHashtag($teks2)
);

echo "<hr>";

$tesk3 = "Untuk informasi lebih lanjut tentang pendidikan di Surabaya, anda bisa mengirimkan surel ke alamat dispendik@surabaya.go.id";

echo deteksiEmail($tesk3);

echo "<hr>";

$teks4 = "_Bismillahirrahmanirrahim_.. Mohon maaf, sepertinya besok saya *tidak bisa hadir* ke kampus karena ~malas~ ada suatu kepentingan.";

echo deteksiKodeSpesialWA($teks4);