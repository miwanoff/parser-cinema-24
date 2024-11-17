<?php

require "./simplehtmldom/simple_html_dom.php";

$palladium = file_get_html("https://www.palladium-cinema.com.ua/");

echo $palladium;