<?php

$filename = "st.txt";
$f = fopen($filename, "r");

$st = fread($f, filesize($filename));
$student = unserialize($st);

print_r($student);
