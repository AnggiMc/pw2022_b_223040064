<?php 
$depan = "Anggi";
$belakang = "Mauliya";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 == 0) {
        echo "$depan $belakang <br>";
    } elseif ($i % 5 == 0) {
        echo "$belakang <br>";
    } elseif ($i % 3 == 0) {
        echo "$depan <br>";
    } else {
        echo "$i <br>";
    }
}