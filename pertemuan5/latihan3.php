<?php
$kucing = ["Oren", 3, "Heru", "Wishkas", "cempaka putih"];

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
    <ul>
        <li><?php echo $kucing[0]; ?></li>
        <li><?php echo $kucing[1]; ?></li>
        <li><?php echo $kucing[2]; ?></li>
        <li><?php echo $kucing[3]; ?></li>
        <li><?php echo $kucing[4]; ?></li>
    </ul>
</body>

</html>