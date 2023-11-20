<?php
$mahasiswa = [
    ["Pani","123456","Sistem Informasi","pani664@gmail.com"],
    ["Sera","123456","Sistem Informasi","serapm13@gmail.com"],
    ["Zaid","123456","Sistem Informasi","zaid26@gmail.com"],
    ["Hapid","123456","Sistem Informasi","hapid20@gmail.com"]

]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>daftar mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li><?= $mhs[0]; ?></li>
        <li><?= $mhs[1]; ?></li>
        <li><?= $mhs[2]; ?></li>
        <li><?= $mhs[3]; ?></li>

    </ul>
    <?php endforeach; ?>
</body>
</html>