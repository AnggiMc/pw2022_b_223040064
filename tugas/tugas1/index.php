<?php
$npm = 64;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>
<body>
    <style>
        p {
            font-size: 25px;
        }
    </style>

    <p>
        Aku adalah angka <b><?php echo $npm?></b><br>
        Jika aku dikali 5, maka aku sekarang menjadi <b><?php echo $npm *= 5 ?></b><br>
        Jika aku dibagi 2, maka aku sekarang menjadi <b><?php echo $npm /= 2 ?></b><br>
        Jika aku ditambah 75, maka aku sekarang menjadi <b><?php echo $npm += 75 ?></b><br>
        Jika aku dikurang 20, maka aku sekarang menjadi <b><?php echo $npm -= 20 ?></b><br>
    </p>
</body>
</html>