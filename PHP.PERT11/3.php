<?php
$mahasiswa = [
    ["Pani","123456","Sistem Informasi","pani664@gmail.com"],
    ["Sera","123456","Sistem Informasi","serapm13@gmail.com"],
    ["Zaid","123456","Sistem Informasi","zaid26@gmail.com"],
    ["Hapid","123456","Sistem Informasi","hapid20@gmail.com"]

];
?>
<html lang="en">
    <head>
        <title>Document</title>

    </head>
    <body>
        <h1>Daftar Mahasiswa<h1>
            <?php foreach ($mahasiswa as $mhs): ?>
            <ul>
                <li><?= $mhs[0]; ?></li>
                <li><?= $mhs[1]; ?></li>
                <li><?= $mhs[2]; ?></li>
                <li><?= $mhs[3]; ?></li>
               
            </ul>
            <?php endforeach ; ?>
       
    </body>
</html>