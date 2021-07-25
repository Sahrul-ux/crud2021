<?php
$kucing = [
    [
        "jeniskucing" => "Oren",
        "usia" => 3,
        "namapemilik" => "Heru",
        "makanan" => "Wishkas",
        "alamat" => "cempaka putih"
    ],
    [
        "jeniskucing" => "Loreng",
        "usia" => 12,
        "namapemilik" => "Aldi",
        "makanan" => "Wishkas",
        "alamat" => "Kayu Putih"
    ],
    [
        "jeniskucing" => "Hitam",
        "usia" => 5,
        "namapemilik" => "Parto",
        "makanan" => "Wishkas",
        "alamat" => "Priok"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kucing</title>
</head>

<body>
    <h1>Daftar Kucing</h1>
    <?php foreach ($kucing as $k) : ?>
        <ul>
            <li>Jenis Kucing: <?php echo $k["jeniskucing"]; ?></li>
            <li>Usia : <?php echo $k["usia"]; ?>bln.</li>
            <li>Nama Pemilik: <?php echo $k["namapemilik"]; ?></li>
            <li>Makanan : <?php echo $k["makanan"]; ?></li>
            <li>Alamat : <?php echo $k["alamat"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>