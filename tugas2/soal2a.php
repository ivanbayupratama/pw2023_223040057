<?php // 2a.php
$nm_depan = " Ivan ";
$nm_belakang = " Bayu ";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 == 0) {
        echo "$nm_depan $nm_belakang <br>";
    } elseif ($i % 5 == 0) {
        echo "$nm_belakang <br>";
    } elseif ($i % 3 == 0) {
        echo "$nm_depan <br>";
    } else {
        echo "$i <br>";
    }
}
