<?php
    $mahasiswa = 
    [
        [
        "nama" => "roni",
        "nim" => "123456",
        "jurusan" => "sistem informasi",
        "email" => "roni@gmail.com"
    ],
    [
        "nama" => "rudi",
        "nim" => "474586",
        "jurusan" => "sistem informasi",
        "email" => "rudi88@gmail.com"
    ]
    ];
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
            <li>
                <img src="3.jpg" alt="">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Nim : <?= $mhs["nim"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
        <?php endforeach; ?>      
    </body>
    </html>