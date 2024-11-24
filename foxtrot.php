<?php
header("Content-Type: text/html; charset=utf-8");

require 'simplehtmldom_/simple_html_dom.php';

// .card__body .card__title

$foxtrot = file_get_html("https://www.foxtrot.com.ua/ru/shop/noutbuki.html");
//print_r($foxtrot);


$links = [];
$names = [];

$card_titles = count($foxtrot->find('.card__body .card__title'));

if (count($foxtrot->find('.card__body .card__title'))) {
    foreach ($foxtrot->find('.card__body .card__title') as $a) {
        $links[] = $a->href;
        $names[] = $a->innertext;
    }
}

print_r($links);

print_r($names);