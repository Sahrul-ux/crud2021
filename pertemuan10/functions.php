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

function tambah($data)
{
    global $conn;
    // ambil apakah tombol submit sudah ditekan atau belum
    $jeniskucing = $data["jeniskucing"];
    $warna = $data["warna"];
    $namakucing = $data["namakucing"];
    $makanan = $data["makanan"];
    $usia = $data["usia"];
    $fotokucing = $data["fotokucing"];
    $namapemilik = $data["namapemilik"];
    $alamat = $data["alamat"];
    $notelp = $data["notelp"];
    $email = $data["email"];
    $fotopemilik = $data["fotopemilik"];

    // query insert data
    $query = "INSERT INTO tb_kucing
    VALUES
    ('', '$jeniskucing','$warna', '$namakucing','$makanan', '$usia', '$fotokucing', '$namapemilik', '$alamat', '$notelp','$email', '$fotopemilik')";
    mysqli_query($conn, $query);
    // klo gagal -1 klo berhasil 1
    return mysqli_affected_rows($conn);
}
