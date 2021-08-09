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
    $jeniskucing = htmlspecialchars($data["jeniskucing"]);
    $warna = htmlspecialchars($data["warna"]);
    $namakucing = htmlspecialchars($data["namakucing"]);
    $makanan = htmlspecialchars($data["makanan"]);
    $usia = htmlspecialchars($data["usia"]);
    $fotokucing = htmlspecialchars($data["fotokucing"]);
    $namapemilik = htmlspecialchars($data["namapemilik"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $notelp = htmlspecialchars($data["notelp"]);
    $email = htmlspecialchars($data["email"]);
    $fotopemilik = htmlspecialchars($data["fotopemilik"]);

    // query insert data
    $query = "INSERT INTO tb_kucing
    VALUES
    ('', '$jeniskucing','$warna', '$namakucing','$makanan', '$usia', '$fotokucing', '$namapemilik', '$alamat', '$notelp','$email', '$fotopemilik')";
    mysqli_query($conn, $query);
    // klo gagal -1 klo berhasil 1
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_kucing WHERE id= $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    // ambil apakah tombol submit sudah ditekan atau belum
    $id = $data["id"];
    $jeniskucing = htmlspecialchars($data["jeniskucing"]);
    $warna = htmlspecialchars($data["warna"]);
    $namakucing = htmlspecialchars($data["namakucing"]);
    $makanan = htmlspecialchars($data["makanan"]);
    $usia = htmlspecialchars($data["usia"]);
    $fotokucing = htmlspecialchars($data["fotokucing"]);
    $namapemilik = htmlspecialchars($data["namapemilik"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $notelp = htmlspecialchars($data["notelp"]);
    $email = htmlspecialchars($data["email"]);
    $fotopemilik = htmlspecialchars($data["fotopemilik"]);

    // query insert data
    $query = "UPDATE tb_kucing SET 
    jeniskucing = '$jeniskucing',
    warna = '$warna',
    namakucing = '$namakucing',
    makanan = '$makanan',
    usia = '$usia',
    fotokucing = '$fotokucing',
    namapemilik = '$namapemilik',
    alamat = '$alamat',
    notelp = '$notelp',
    email = '$email',
    fotopemilik = '$fotopemilik'
    WHERE id = $id
    ";
    mysqli_query($conn, $query);
    // klo gagal -1 klo berhasil 1
    return mysqli_affected_rows($conn);
}
