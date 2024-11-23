<?php
$a = ["a"=>"aa", "b"=>"bb", "c"=>["х"=>"хх"]];
$st = serialize($a);
//echo $st;

$f = fopen("st.txt", "w");
fwrite($f , $st );
fclose($f);
// $phone = unserialize($st);

// print_r($phone);