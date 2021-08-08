<?php
// koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "kucing");
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // var_dump($_POST);
    // ambil apakah tombol submit sudah ditekan atau belum
    $jeniskucing = $_POST["jeniskucing"];
    $warna = $_POST["warna"];
    $namakucing = $_POST["namakucing"];
    $makanan = $_POST["makanan"];
    $usia = $_POST["usia"];
    $fotokucing = $_POST["fotokucing"];
    $namapemilik = $_POST["namapemilik"];
    $alamat = $_POST["alamat"];
    $notelp = $_POST["notelp"];
    $email = $_POST["email"];
    $fotopemilik = $_POST["fotopemilik"];

    // query insert data
    $query = "INSERT INTO tb_kucing
    VALUES
    ('', '$jeniskucing','$warna', '$namakucing','$makanan', '$usia', '$fotokucing', '$namapemilik', '$alamat', '$notelp','$email', '$fotopemilik)";
    mysqli_query($conn, $query);

    // cek apakah data berhasil ditambahkan atau tidak
    var_dump(mysqli_affected_rows($conn));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kucing</title>
</head>
<h1>Tambah Data Kucing</h1>

<body>
    <form action="" method="post">
        <ul>
            <li>
                <label for="jeniskucing">Jenis Kucing</label>
                <input type="text" name="jeniskucing" id="jeniskucing">
            </li>
            <li>
                <label for="warna">Warna</label>
                <input type="text" name="warna" id="warna">
            </li>
            <li>
                <label for="namakucing">Nama Kucing</label>
                <input type="text" name="namakucing" id="namakucing">
            </li>
            <li>
                <label for="makanan">Makanan</label>
                <input type="text" name="makanan" id="makanan">
            </li>
            <li>
                <label for="usia">Usia</label>
                <input type="text" name="usia" id="usia">
            </li>
            <li>
                <label for="fotokucing">Foto Kucing</label>
                <input type="text" name="fotokucing" id="fotokucing">
            </li>
            <li>
                <label for="namapemilik">Nama Pemilik</label>
                <input type="text" name="namapemilik" id="namapemilik">
            </li>
            <li>
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat">
            </li>
            <li>
                <label for="notelp">No. Telp</label>
                <input type="text" name="notelp" id="notelp">
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="fotopemilik">Foto Pemilik</label>
                <input type="text" name="fotopemilik" id="fotopemilik">
            </li>
            <lI>
                <button type="submit" name="submit">Tambah Data</button>
            </lI>


        </ul>
    </form>
</body>

</html>