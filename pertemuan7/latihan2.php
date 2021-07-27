<?php

// variable superglobal
// $_GET 
// $_POST 
// $_REQUEST
// $_SESSION 
// $_COOKIE
// $_SERVER
// $_ENV

// 1. $_GET
// $_GET["jeniskucing"] = "persia";
// $_GET["warna"] = "oren";
// var_dump($_GET);
$kucing = [
    [
        "jeniskucing" => "Anggora",
        "warna" => "orange",
        "namakucing" => "Bobon",
        "makanan" => "Wishkas",
        "usia" => 3,
        "namapemilik" => "Heru",
        "notelp" => "081",
        "alamat" => "cempaka putih",
        "email" => "heru@gmail.com",
        "gambar" => "gambar1.jpg"
    ],
    [
        "jeniskucing" => "Persia",
        "warna" => "abu-abu",
        "namakucing" => "Woro",
        "makanan" => "Wishkas",
        "usia" => 12,
        "namapemilik" => "Satria",
        "notelp" => "089",
        "alamat" => "Celilitaan",
        "email" => "woro@gmail.com",
        "gambar" => "gambar2.jpg"
    ],
    [
        "jeniskucing" => "Mixdom",
        "warna" => "Putih",
        "namakucing" => "Angel",
        "makanan" => "Royal canin",
        "usia" => 6,
        "namapemilik" => "Seto",
        "notelp" => "088",
        "alamat" => "Pulo Gadung",
        "email" => "seto@gmail.com",
        "gambar" => "gambar3.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Pemilik Penitipan Kucing</h1>
    <ul>
        <?php foreach ($kucing as $k) : ?>
            <li>
                <a href="latihan3.php?namapemilik=<?= $k["namapemilik"]; ?>&jeniskucing=<?= $k["jeniskucing"]; ?>&warna=<?= $k["warna"]; ?>&namakucing=<?= $k["namakucing"]; ?>&makanan=<?= $k["makanan"]; ?>&usia=<?= $k["usia"]; ?>&notelp=<?= $k["notelp"]; ?>&alamat=<?= $k["alamat"]; ?>&email=<?= $k["email"]; ?>&gambar=<?= $k["gambar"]; ?>"> <?= $k["namapemilik"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>