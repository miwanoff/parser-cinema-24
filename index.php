<?php

require "./simplehtmldom_/simple_html_dom.php";

$palladium = file_get_html("https://www.palladium-cinema.com.ua/");

//echo $palladium;
$links = [];
$inner = [];

//$count = count($palladium->find('.poster span.movie-name'));
$count = count($palladium->find('.film-slider .poster a:nth-child(2) a'));
echo $count;
$p_links = $palladium->find('.film-slider .poster a:nth-child(2) a');
if (count($p_links)) {
    foreach ($p_links as $a) {
        $links[] = $a->href;
        $inner[] = $a->innertext;
    }
}
print_r($links);

print_r($inner);

if (count($palladium->find('.poster span.movie-name'))) {
    foreach ($palladium->find('.poster span.movie-name') as $a) {
        // $links[] = $a->href;
        $names[] = $a->innertext;
    }
}

// print_r($links);
// print_r($names);
//$movies_titles = $palladium->find('.poster span.movie-name');

//print_r($movies_titles );

$ul = [];
$ul[] = "<ul>";
for ($i = 0; $i < count($inner); $i++) {
    $ul[] = "<li><strong>Назва: </strong><a href='{$links[$i]}'>{$inner[$i]}</a></li>";
}
$ul[] = "</ul>";
$content = implode("\n", $ul);
echo $content;