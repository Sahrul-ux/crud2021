<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "kucing");
// ambil data dari tabel kucing / query data kucing
$result = mysqli_query($conn, "SELECT * FROM tb_kucing");
// cara munculin eror :
// if (!$result) {
//     echo mysqli_error($conn);
// }
// var_dump($result);

// ambil data (fetch) mahasiswa dari objek result
// mysqli_fetch_row() -> mengembalikan array numerik
// mysqli_fetch_assoc() -> mengembalikan arrray asosiatif
// mysqli_fetch_array() -> mengembalikan keduanya (data jadi doble)
// mysqli_fetch_object() -> mengembalikan objek

// while ($k = mysqli_fetch_assoc($result)) {
//     var_dump($k);
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Kucing</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Foto Kucing</th>
            <th>Jenis Kucing</th>
            <th>Warna</th>
            <th>Nama Kucing</th>
            <th>Makanan</th>
            <th>Usia (bln.)</th>
            <th>Nama Pemilik</th>
            <th>Alamat</th>
            <th>No. Telp</th>
            <th>Email</th>
            <th>Foto Pemilik</th>
        </tr>
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">ubah</a> |
                    <a href="">hapus</a>
                </td>
                <td><img src="kucing/<?php echo $row["fotokucing"]; ?>" width="100"></td>
                <td><?= $row["jeniskucing"]; ?></td>
                <td><?= $row["warna"]; ?></td>
                <td><?= $row["namakucing"]; ?></td>
                <td><?= $row["makanan"]; ?></td>
                <td><?= $row["usia"]; ?></td>
                <td><?= $row["namapemilik"]; ?></td>
                <td><?= $row["alamat"]; ?></td>
                <td><?= $row["notelp"]; ?></td>
                <td><?= $row["jeniskucing"]; ?></td>
                <td><img src="img/<?= $row["fotopemilik"]; ?>" width="100"></td>
            </tr>
            <?php $i++; ?>
        <?php endwhile; ?>
</body>

</html>