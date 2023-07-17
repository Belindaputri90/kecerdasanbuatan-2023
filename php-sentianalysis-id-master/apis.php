<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'senti';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error connecting to database: " . mysqli_error_string($conn));
}

$payload = file_get_contents("php://input");
$data = json_decode($payload, true);

if($data['tipe']=='post'){
    $posting = $data['posting'];
    $tgl = $data['tgl_posting'];
    $insert = $conn->query("INSERT INTO table_posting (judul_posting, tgl_posting) value('$posting', '$tgl') ");

    if($insert){
        echo "OK";
    } else{
        echo "Gagal";
    }
}

?>