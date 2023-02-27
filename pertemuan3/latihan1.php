<?php
$nilai_awal = 1; //inisialisasi
echo "Mulai. <br>";
// 1.inisialisasi / nilai awal
// 2.kondisi terminasi / kapan pengulangan berhenti
// 3.increment / decrement
while($nilai_awal <= 10) { // kondisi terminasi
    echo "Hello World $nilai_awal <br>";
    $nilai_awal++;
}
echo "Selesai. <br>";

echo "<hr>";

echo "Mulai. <br>";
for ($nilai_awal = 1; $nilai_awal < 5; $nilai_awal++) {
    echo "Hello World $nilai_awal <br>";
}
?>