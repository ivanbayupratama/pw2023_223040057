<?php
require('functions.php');
$name = 'Home';

// siapkan data students
$students = query("SELECT * FROM MAHASISWA");
require('views/index.view.php');
