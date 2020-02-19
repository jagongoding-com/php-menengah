<?php

setlocale(LC_TIME, 'id_ID.utf8');

$hariIni = new DateTime();

echo $hariIni->format('l F Y, H:i') . '<br>';
echo $hariIni->format('D M y, H:i') . '<br>';

echo "<br>";

echo strftime('%A %d %B %Y, %H:%M', $hariIni->getTimestamp()) . '<br>';
echo strftime('%a %d %b %Y, %H:%M', $hariIni->getTimestamp()) . '<br>';
