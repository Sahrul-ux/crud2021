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

$k = mysqli_fetch_object($result);
var_dump($k->namakucing);

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
            <th>Usia</th>
            <th>Nama Pemilik</th>
            <th>Alamat</th>
            <th>No. Telp</th>
            <th>Email</th>
            <th>Foto Pemilik</th>
        </tr>
        <tr>
            <td>1</td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td><img src="kucing/kucing1.jpg" width="100"></td>
            <td>Jenis Kucing</td>
            <td>Warna</td>
            <td>Nama Kucing</td>
            <td>Makanan</td>
            <td>Usia</td>
            <td>Nama Pemilik</td>
            <td>Alamat</td>
            <td>No. Telp</td>
            <td>Email</td>
            <td><img src="img/gambar1.jpg" width="100"></td>
        </tr>
    </table>
</body>

</html>