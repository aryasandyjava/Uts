<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS BILANGAN GANJIL GENAP</title>
</head>
<body>

<table class="Tabel1">

<h2 class = "Soal2">Soal No 0</h2>

<tr>
    <th>GANJIL</th>
    <th>GENAP</th>
</tr>

    <?php
    for($a = 1; $a <= 5; $a++){
        if($a % 2 == 1){
            echo "<tr>";
            echo "<td>".$a."</td>";
            echo "<td></td>";
            echo "</tr>";
        }else{
            echo "<tr>";
            echo "<td></td>";
            echo "<td>".$a."</td>";
            echo "</tr>";
        }
    }
    ?>
    </table>

<table class="Tabel2">

<h2 class="Soal1">Soal No 1</h2>

<tr>
    <th>GANJIL</th>
    <th>GENAP</th>
</tr>

<?php

$GANJIL = array();
$GENAP  = array();

for($a = 1; $a <= 8; $a++){
    if($a % 2 == 1){
        $GANJIL[] = $a;
    }else{
        $GENAP[] = $a;
    }
}

$count = max(count($GANJIL), count($GENAP));

for($i = 0; $i < $count; $i++){
    echo "<tr>";
    if($i < count($GANJIL)){
        echo "<td>".$GANJIL[$i]."</td>";
    }else{
        echo "<td></td>";
    }

    if($i < count($GENAP)){
        echo "<td>".$GENAP[$i]."</td>";
    }else{
        echo "<td></td>";
    }
    echo "</tr>";
}

?>
    </table>

    <style>
        .Tabel1{
            font-family: Calibri;
            font-size: 16;
            color: black;
            text-align: center;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .Tabel2{
            font-family: Calibri;
            font-size: 16;
            color: black;
            text-align: center;
            border-collapse: collapse;
            
        }

        .Tabel1,.Tabel2,th,td{
            border: 1px solid black;
            padding: 6px;
            width: 500px;
        }

        .Soal1,.Soal2{
            font-family: Arial;
        }
    </style>

</body>
</html>