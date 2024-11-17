<?php

require "./simplehtmldom/simple_html_dom.php";

$palladium = file_get_html("https://www.palladium-cinema.com.ua/");

//echo $palladium;
$links = [];
$names = [];

//$count = count($palladium->find('.poster span.movie-name'));
$count = count($palladium->find('.film-slider .poster a:nth-child(1)'));
echo $count;

if (count($palladium->find('.film-slider .poster a:nth-child(2)'))) {
    foreach ($palladium->find('.film-slider .poster a:nth-child(2)') as $a) {
        $links[] = $a->href;
        $names[] = $a->innertext;
    }
}

// print_r($links);
// print_r($names);
//$movies_titles = $palladium->find('.poster span.movie-name');

//print_r($movies_titles );

$ul = [];
$ul[] = "<ul>";
for ($i = 0; $i < count($names); $i++) {
    $ul[] = "<li><strong>Назва: </strong><a href='{$links[$i]}'>{$names[$i]}</a></li>";
}
$ul[] = "</ul>";
$content = implode("\n", $ul);
echo $content;