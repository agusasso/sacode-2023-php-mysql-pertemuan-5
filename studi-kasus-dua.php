<?php


$data = [
    [
        "nama" => "Agus",
        "alamat" => "waena",
        "jk" => "l",
    ],
    [
        "nama" => "Evati",
        "alamat" => "waena",
        "jk" => "p",
    ],
    [
        "nama" => "Grace",
        "alamat" => "waena",
        "jk" => "p",
    ],
];

foreach ($data as $peserta) {
    echo $peserta['nama'] . "<br>";
    echo $peserta['alamat'] . "<br>";

    if ($peserta['jk'] == 'p') {
        $jk = 'perempuan';
    } else {
        $jk = 'Laki-Laki';
    }

    echo $jk . "<br>";
    echo "<br> <br>";
}
