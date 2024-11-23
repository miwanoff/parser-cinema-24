<?php

// $file = fopen("contacts.csv", "r");
// print_r(fgetcsv($file));
// fclose($file);

$row = 1;
if (($handle = fopen("contacts.csv", "r")) !== false) {
    while (($data = fgetcsv($handle, 1000)) !== false) {
        print_r($data);
        // $num = count($data); // количество полей в строке
        // for ($c = 0; $c < $num; $c++) {
        //     echo $data[$c] . "\n";
        // }
    }
    fclose($handle);
} else {
    echo "Can`t open file";
}