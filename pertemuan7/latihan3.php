<?php
// cek apakah tidak ada data di $_GET
if (
    !isset($_GET["namapemilik"]) ||
    !isset($_GET["jeniskucing"]) ||
    !isset($_GET["warna"]) ||
    !isset($_GET["namakucing"]) ||
    !isset($_GET["namapemilik"]) ||
    !isset($_GET["makanan"]) ||
    !isset($_GET["usia"]) ||
    !isset($_GET["notelp"]) ||
    !isset($_GET["alamat"]) ||
    !isset($_GET["email"])
) {
    // redirect
    header("Location: latihan2.php");
    exit;
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kucing</title>
</head>

<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["jeniskucing"]; ?></li>
        <li><?= $_GET["warna"]; ?></li>
        <li><?= $_GET["namakucing"]; ?></li>
        <li><?= $_GET["makanan"]; ?></li>
        <li><?= $_GET["usia"]; ?></li>
        <li><?= $_GET["namapemilik"]; ?></li>
        <li><?= $_GET["notelp"]; ?></li>
        <li><?= $_GET["alamat"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
    </ul>

    <a href="latihan2.php">Kembali Ke Home</a>
</body>









</html>