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

    // upload gambar kucing
    $fotokucing = upload();
    if (!$fotokucing) {
        return false;
    }

    $namapemilik = htmlspecialchars($data["namapemilik"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $notelp = htmlspecialchars($data["notelp"]);
    $email = htmlspecialchars($data["email"]);

    // upload gambar pemiliknya
    $fotopemilik = upload();
    if (!$fotopemilik) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO tb_kucing
    VALUES
    ('', '$jeniskucing','$warna', '$namakucing','$makanan', '$usia', '$fotokucing', '$namapemilik', '$alamat', '$notelp','$email', '$fotopemilik')";
    mysqli_query($conn, $query);
    // klo gagal -1 klo berhasil 1
    return mysqli_affected_rows($conn);
}


function upload()
{

    // dua gambar foto kucing dan foto pemilik
    $namaFile = $_FILES['fotokucing']['name'];
    $namaFile = $_FILES['fotopemilik']['name'];
    $ukuranFile = $_FILES['fotokucing']['size'];
    $ukuranFile = $_FILES['fotopemilik']['size'];
    $error = $_FILES['fotokucing']['error'];
    $error = $_FILES['fotopemilik']['error'];
    $tmpName = $_FILES['fotokucing']['tmp_name'];
    $tmpName = $_FILES['fotopemilik']['tmp_name'];





    // cek apakah tidak ada gambar yang diupload 
    if ($error === 4) {
        echo "<script>
        alert('pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    // cek apakah yang diuplad adalah gambar 
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    //ekstensi gambar apa saja yang boleh diuplad
    $ekstensiGambar = explode('.', $namaFile);
    // explode memecah nama gamabr dan ekstensinya
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    // end mengambil array paling belakang yaitu ekstensi
    // strtolower untuk mengubah ekstensi selalu jadi kecil misalkan JPEG jadi jpeg
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
    alert('yang anda upload bukan gambar!');
    </script>";
        return false;
    }
    // in_array untuk cek apakah ada string didalam array


    // cek ukuran gambar terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
    alert('ukuran gambar terlalu besar!');
    </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama file baru
    $namaFileBaru1 = uniqid();
    $namaFileBaru2 = uniqid();
    $namaFileBaru1 = '.';
    $namaFileBaru2 = '.';
    $namaFileBaru1 = $ekstensiGambar;
    $namaFileBaru2 = $ekstensiGambar;


    // var_dump($namaFileBaru1);
    // var_dump($namaFileBaru2);
    // die;
    move_uploaded_file($tmpName, 'kucing/' . $namaFileBaru1);
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru2);

    return $namaFileBaru1;
    return $namaFileBaru2;
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
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau idak
    if ($_FILES['fotokucing']['error'] === 4) {
        $fotokucing = $gambarLama;
    } else {
        $fotokucing = upload();
    }

    $namapemilik = htmlspecialchars($data["namapemilik"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $notelp = htmlspecialchars($data["notelp"]);
    $email = htmlspecialchars($data["email"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau idak
    if ($_FILES['fotopemilik']['error'] === 4) {
        $fotopemilik = $gambarLama;
    } else {
        $fotopemilik = upload();
    }


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

function cari($keyword)
{
    $query = "SELECT * FROM tb_kucing WHERE jeniskucing LIKE '%$keyword%' OR
    warna LIKE '%$keyword%' OR
    namakucing LIKE '%$keyword%' OR
    makanan LIKE '%$keyword%' OR
    usia LIKE '%$keyword%' OR
    namapemilik LIKE '%$keyword%' OR
    alamat LIKE '%$keyword%' OR
    notelp LIKE '%$keyword%' OR
    email LIKE '%$keyword%' ";
    return query($query);
}
