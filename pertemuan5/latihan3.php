<?php
$kucing = [
    ["Oren", 3, "Heru", "Wishkas", "cempaka putih"],
    ["Loreng", 12, "Aldi", "Wishkas", "Kayu Putih"],
    ["Hitam", 5, "Parto", "Wishkas", "Priok"]
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
            <li>Jenis Kucing: <?php echo $k[0]; ?></li>
            <li>Usia : <?php echo $k[1]; ?>bln.</li>
            <li>Nama Pemilik: <?php echo $k[2]; ?></li>
            <li>Makanan : <?php echo $k[3]; ?></li>
            <li>Alamat : <?php echo $k[4]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>