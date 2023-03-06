<?php

function urutanAngka($angka)
{

    $urutan = 1;

    for ($x = 1; $x <= $angka; $x++) {
        for ($y = 1; $y <= $x; $y++) {
            echo $urutan . " ";
            $urutan++;
        }
        echo "<br>";
    }
}
urutanAngka(5);
