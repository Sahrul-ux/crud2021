<!DOCTYPE html>
<html lang="en">

<?php
function salam($waktu = "Datang", $nama = "Admin")
{
    return "Selamat $waktu, $nama!";
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Membuat Function</title>
</head>

<body>
    <h1> <?php echo salam("Pagi", "Sahrul"); ?> </h1>
</body>

</html>