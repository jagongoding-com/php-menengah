<?php

$mahasiswa = [
    'nama' => 'Nurul Huda',
    'domisili' => 'Surabaya'
];

$mahasiswa = (object) $mahasiswa;

echo "<pre>";
print_r($mahasiswa);
echo "</pre>";

$mahasiswa = [
    'nama' => 'Nurul Huda',
    'domisili' => 'Surabaya'
];

$mahasiswa = (object) $mahasiswa;

echo "Nama: {$mahasiswa->nama} <br>";
echo "Domisili: {$mahasiswa->domisili} <br>";

echo "<hr>";

$mahasiswa = (object) [
    "nama" => "Fulan bin Fulan",
    "domisili" => "Surabaya",
    "sosial_media" => [
        "facebook" => "https://facebook.com/fulanbinfulan",
        "instagram" => "https://instagram.com/fulan.bin.fulan",
        "twitter" => "https://twitter.com/fulan_bin_fulan"
    ]
];

$mahasiswa->sosial_media = (object) $mahasiswa->sosial_media;

echo "<pre>";
print_r($mahasiswa);
echo "</pre>";