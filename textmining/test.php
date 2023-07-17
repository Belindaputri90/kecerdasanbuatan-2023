<?php
// Mengimpor library TextMining
require_once 'TextMining.php';

// Inisialisasi objek TextMining

$textMining = new TextMining();

// Menentukan teks yang akan diproses

//$text = "Ini adalah contoh teks yang akan diproses menggunakan text mining. Teks ini berisi beberapa kata-kata penting seperti 'text mining', 'proses', 'contoh', dan 'kata-kata'.";
$text = "Ini adalah contoh sebuah kalimat ini loh";

// Memisahkan teks menjadi kata-kata
$words = $textMining->tokenizeText($text);

// Menghitung frekuensi kemunculan kata

$wordFrequency = $textMining->calculateWordFrequency($words);

// text contoh
echo "Text asli ". $text;
echo "<br>";

// Menampilkan kata-kata beserta frekuensi kemunculannya
echo "Kata-kata yang ditemukan dan frekuensi kemunculannya: <br>";
foreach ($wordFrequency as $word => $frequency) {
    echo $word . ": " . $frequency . "<br>";
}

// Melakukan proses stop word removal
$stopWords = ['ini', 'adalah', 'yang', 'akan', 'dan'];
$filteredWords = $textMining->removeStopWords($words, $stopWords);

// Menampilkan kata-kata setelah stop word removal

echo "<br>";
echo "\nKata-kata setelah stop word removal:\n";
foreach ($filteredWords as $word) {
    echo $word . "\n";
}

// Melakukan proses stemming
$stemmedWords = $textMining->stemWords($filteredWords);

// Melakukan stopWords

$stopWords = $stopWords;
$filteredWords = $textMining->removeStopWord


// Menampilkan kata-kata setelah stemming
echo "<br>";
echo "\nKata-kata setelah stemming:\n";
foreach ($stemmedWords as $word) {
    echo $word . "\n";
}
?>