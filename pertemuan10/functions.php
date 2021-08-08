<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "kucing");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($sata)
{
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
}
