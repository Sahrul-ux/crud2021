<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function php</title>
</head>

<body>
    <!-- Date untuk menampilkan tanggal dengan format tertentu
    contoh dibawah tmapilnya adalah Wednesday, 21-Jul-2021 -->
    <!-- echo date "l, d-M-Y"; -->

    <!-- Time
    UNIX TimeStamp/ EPOCH time
    detik yang sedang berlalu sejak 1 januari 1970 -->
    <!-- echo time; -->

    <!-- echo date"d M Y", time - 60 * 60 * 24 * 100; -->


    <!-- mktime 
    membuat sendiri detik 
    mktime 0,0,0,0,0,0
    jam, menit, detik, bulan, tanggal, tahun  -->

    <!--  echo date "l", mktime 0, 0, 0, 2, 12, 1991 ; -->

    <!-- strtotime -->
    <?php echo date("l", strtotime("12 feb 1991")) ?>


</body>

</html>