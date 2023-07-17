<?php

require_once __DIR__ . '/autoload.php' ;
$sentiment=new \PHPInsight\Sentiment(); 

header('Access-Control-Allow-Origin: http://localhost:8006');

header('Access-Control-Allow-Methods: GET, POST');

header('Access-Control-Allow-Headers: X-Requested-With');

// 1. Terima data dalam bentuk judul_posting
// 2. decode file ke array object
// 3. urai arraynya dan test sentimentnya

//get semua data dari client

$payload = file_get_contents('php://input');

$data = json_decode($payload, true);

foreach($data as $text){
    $hasil = $sentiment->categorise($text);
    echo $hasil;
}

?>