<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>looping</h1>
    <?php
    echo "1. Gunakan loop for dan while loop <br><br>";
for($a=1;$a<=5;$a++){
    $b=1;
    while ($b <= $a){
        print("$a");
        $b++;
    }
    echo "<br>";
}
?>
<?php
echo " <br> 2. Buatlah program untuk menghitung nilai faktorial <br>";
function faktorialFor($n) {
    $hasil = 1;
    for ($i = 1; $i <= $n; $i++) {
        $hasil *= $i;
    }
    return $hasil;
}

// Contoh penggunaan
$angka = 5; // Ganti dengan angka yang diinginkan
echo " <br> Faktorial dari $angka menggunakan for adalah: " . faktorialFor($angka);
?>

<?php
function faktorialWhile($n) {
    $hasil = 1;
    $i = 1;
    while ($i <= $n) {
        $hasil *= $i;
        $i++;
    }
    return $hasil;
}

// Contoh penggunaan
$angka = 7; // Ganti dengan angka yang diinginkan
echo "<br> Faktorial dari $angka menggunakan while adalah: " . faktorialWhile($angka);
?>

<?php
function faktorialDoWhile($n) {
    $hasil = 1;
    $i = 1;
    do {
        $hasil *= $i;
        $i++;
    } while ($i <= $n);
    return $hasil;
}

// Contoh penggunaan
$angka = 10; // Ganti dengan angka yang diinginkan
echo " <br> Faktorial dari $angka menggunakan do-while adalah: " . faktorialDoWhile($angka);
?>



</body>
</html>