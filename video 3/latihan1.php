<?php

// $mahasiswa = [
//     [ 
//         "nama" => "Dikkahardilla",
//         "nim" => "2217020058",
//         "email" => "dikkahardilla@gmail.com"
//    ],
//    [ 
//         "nama" => "lala",
//         "nim" => "2217020058",
//         "email" => "lala@gmail.com"
//    ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=mahasiswa', 'root',);
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>