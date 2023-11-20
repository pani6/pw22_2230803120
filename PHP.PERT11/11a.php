<?php
    $mahasiswa = 
    [
        [
        "nama" => "noni",
        "nim" => "123456",
        "jurusan" => "sistem informasi",
        "email" => "noni765@gmail.com"
    ],
    [
        "nama" => "dudi",
        "nim" => "31456",
        "jurusan" => "sistem informasi",
        "email" => "dudi53@gmail.com"
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
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Nim : <?= $mhs["nim"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
        <?php endforeach; ?>      
    </body>
    </html>