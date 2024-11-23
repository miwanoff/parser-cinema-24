<?php
//  // создание нового ресурса cURL 
//  $ch = curl_init (); 
//  // установка URL и других необходимых параметров 
//  curl_setopt ( $ch , CURLOPT_URL , "http://www.example.com/" ); 
//  curl_setopt ( $ch , CURLOPT_HEADER , false ); 
//  // загрузка страницы и выдача её браузеру 
//  curl_exec ( $ch ); 
//  // завершение сеанса и освобождение ресурсов 
//  curl_close ( $ch );

 // инициализация сеанса
//  $ch = curl_init ();
//  // установка URL и других необходимых параметров
//         curl_setopt ( $ch , CURLOPT_URL , "http://www.example.com/" );
//         curl_setopt ( $ch , CURLOPT_HEADER , 0 );
//  // загрузка страницы и выдача её браузеру
//         $tmp = curl_exec ( $ch );
//         print $tmp;
//  // завершение сеанса и освобождение ресурсов
//         curl_close ( $ch );

function curl_file_get_contents($url) {
    $curl = curl_init();//Инициализирует сеанс cURL
    $userAgent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)';
    curl_setopt($curl,CURLOPT_URL,$url); //URL 
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE); //TRUE - чтобы вернуть возвращаемого значения в виде строки вместо вывода его непосредственно.
    curl_setopt($curl,CURLOPT_CONNECTTIMEOUT,5); //Количество секунд ожидания при попытке подключения.
    curl_setopt($curl,CURLOPT_HEADER,TRUE);//TRUE для включения заголовков в вывод. 
    curl_setopt($curl, CURLOPT_USERAGENT, $userAgent); //Содержимое "User-Agent:"-заголовка, который будет использоваться в запросе HTTP.
    curl_setopt($curl, CURLOPT_FAILONERROR, TRUE); //TRUE для подробного отчета при неудаче, если полученный HTTP-код больше или равен 400. 
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE); //TRUE для следования любому заголовку "Location: ", отправленному сервером в своем ответе 
    curl_setopt($curl, CURLOPT_AUTOREFERER, TRUE); //TRUE для автоматической установки поля Referer: в запросах, перенаправленных заголовком Location:.
    curl_setopt($curl, CURLOPT_TIMEOUT, 10); //Максимально позволенное количество секунд для выполнения cURL-функций.
  
    $contents = curl_exec($curl);//Выполняет запрос cURL
    curl_close($curl);//Завершает сеанс cURL
    return $contents;
  }
  echo curl_file_get_contents("http://php.net");