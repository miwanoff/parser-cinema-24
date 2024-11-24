<?php
require 'simplehtmldom_/simple_html_dom.php';
$foxtrot = file_get_html('https://www.foxtrot.com.ua/ru/shop/noutbuki.html');
// foreach($foxtrot->find('img') as $element)
//     echo $element->src . '<br>';
$items = [];
foreach ($foxtrot->find('a.card__title') as $element) {
    $items[] = $element->href;
}

// $articles = $foxtrot->find('a');

//

$links = [];
//foreach ($items as $item) {
//$links['title'] = $item->find('.card__title');
// $item['intro'] = $article->find('.p', 0)->plaintext;
// $item['details'] = $article->find('.details', 0)->plaintext;
// $items[] = $item;
//}

// print_r($items);
//$links = $foxtrot->find('a') ;
// foreach($foxtrot->find('a') as $element){
//     $items[] = $element ;
//    // $item['title'] = $element->find('.card__title');
// }

//print_r($links);

$html = file_get_html('https://www.foxtrot.com.ua/ru/shop/noutbuki.html');

//$articles = $html->find('a[class="card__title sc-product-link product-link"]');
//print_r($articles);

// foreach($articles as $article) {
//     $item['title'] = $article->find('a', 0)->plaintext;
//     // $item['intro'] = $article->find('.p', 0)->plaintext;
//     // $item['details'] = $article->find('.details', 0)->plaintext;
//     $items[] = $item;
// }

// if (count($articles)) {
//     foreach ($articles as $a) {
//         $links[] = $a->href;
//         $names[] = $a->innertext;
//     }
// }

foreach ($html->find('a') as $a) {
    $links[] = $a->href;
    $items[] = $a->innertext;
}

print_r($links);

print_r($items);