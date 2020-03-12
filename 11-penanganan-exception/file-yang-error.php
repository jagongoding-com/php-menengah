<?php
error_reporting(0);
try {
    echo "Halo bro! <br>";

    selamatPagi(); # fungsi tidak pernah didefinisikan
} catch (Throwable $error) {
    echo "Error: {$error->getMessage()}";
}


echo "<hr>";

$a = 5;
$b = 0;

try {
    if ($b < 1) {
        throw new DivisionByZeroError('Variabel $b tidak boleh 0');
    }

    echo $a / $b;
} catch (ArgumentCountError $error) {
  echo "ArgumentCountError exception: " . $error->getMessage();
} catch (DivisionByZeroError $error) {
  echo "DivisionByZeroError exception: " . $error->getMessage();
} catch (Exception $error) {
  echo "Exception: " . $error->getMessage();
}

echo "<hr>";

try {
  # perintah ini tidak menimbulkan error
  echo "8 + 10 = " . (8 + 10) . "<br>";
} catch (Exception $error) {
  echo "Oops, sepertinya sistem kami sedang error <br>";
} finally {
  echo "Aku akan senantiasa dieksekusi <br>";
}