<?php

$dataJson = "[5, 3, 4, 2, 1]";

$data = json_decode($dataJson);

echo implode(" - ", $data);

echo "<hr>";

$json = '{
  "nama": "Nurul Huda",
  "domisili": "Surabaya",
  "usia": 23,
  "wni": true,
  "hobi": [
    "Berenang", "Berlari", "Bertamasya"
  ]
}';

$mahasiswa = json_decode($json);

echo "Nama: {$mahasiswa->nama} <br>";
echo "Domisili: {$mahasiswa->domisili} <br>";

echo "Hobi: " . implode(", ", $mahasiswa->hobi);

echo "<hr>";

$mahasiswa = [
    'nama' => 'Nurul Huda',
    'domisili' => 'Surabaya'
];

echo json_encode($mahasiswa);

echo "<hr>";

$nilaiUjian = [70, 80, 50, 90];

echo json_encode($nilaiUjian);

echo "<hr>";

$listMahasiswaJSON = '[
  { "nama": "Nurul Huda" },
  { "nama": "Renza Ilhami Rizqi" },
  { "nama": "Taufan Aji" },
  { "nama": "Rahmad Dwi Oktanto" }
]';

$listMahasiswa = json_decode($listMahasiswaJSON);

foreach ($listMahasiswa as $key => $mahasiswa) {
  echo "{$key}. Nama: {$mahasiswa->nama} <br>";
}

echo "<hr>";

$kataKunci = "corona";
$from = "2020-02-01";
$sortBy = "publishedAt";
$apiKey = "bea3d73524a94931af588526a5616c4c"; /* <-- Silakan register di newsapi.org untuk mendapatkan API_KEY */
$language = "en";
$alamatAPI = "http://newsapi.org/v2/everything?" .
    "q={$kataKunci}&language={$language}&from={$from}" .
    "&sortBy={$sortBy}&apiKey={$apiKey}";

echo $alamatAPI . "<br>";

# ambil data json dari $alamatAPI
$data = file_get_contents($alamatAPI);
# parsing variabel $data ke dalam array
$dataBerita = json_decode($data);

if ($dataBerita->status === "ok") {
    # tampilkan menggunakan perulangan
    foreach ($dataBerita->articles as $berita) {
        echo "<h3><a href='{$berita->url}'>{$berita->title}</a></h3>";

        if ($berita->urlToImage) {
            echo "<img style='width: 10rem' src='{$berita->urlToImage}'>";
        }

        echo "<p>{$berita->description}</p>";
        echo "<hr>";
    }
}