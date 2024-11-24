<?php

$dom = new DOMDocument();
$html = file_get_contents("https://www.foxtrot.com.ua/ru/shop/noutbuki.html");
@$dom->loadHTML($html); // Use the @ to suppress warnings that might be generated due to malformed HTML.
$elements = $dom->getElementsByTagName('a');
$links = [];
foreach ($elements as $element) {
    //echo $element->nodeValue;
    $links[] = ['url' => $element->getAttribute('href'), 'text' => $element->nodeValue];
}

print_r($links);