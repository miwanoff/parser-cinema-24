<?php
require 'simplehtmldom_/simple_html_dom.php';
$html = file_get_html('https://slashdot.org/');

$articles = $html->find('article[data-fhtype="story"]');
$items = [];
foreach ($articles as $article) {
    $item['title'] = $article->find('.story-title', 0)->plaintext;
    $item['intro'] = $article->find('.p', 0)->plaintext;
    $item['details'] = $article->find('.details', 0)->plaintext;
    $items[] = $item;
}

print_r($items);