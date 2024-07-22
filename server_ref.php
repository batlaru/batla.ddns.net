<?php

// Проверяем, был ли передан параметр method со значением get_servers_online
if ($_GET['method'] === 'get_servers_online') {
    $xmlData = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<document>
  <Data id="arrayExpToLevel" data="1;2;3;4;5;6;7;8;9;10000"></Data>
  <Data id="arrayLang_str" data="ru;ua;en"></Data>
  <Data id="prices_vk" data="din_string;4;3;2"></Data>
  <Data id="prices_fb" data="din_string;4;3;2"></Data>
  <Data id="prices_steam" data="din_string;4;3;2"></Data>
</document>
XML;

    $xml = simplexml_load_string($xmlData); // Загружаем XML-данные

    // Получаем данные из XML и выводим их
    // Например, выведем значение атрибута data у тега Data с id="arrayExpToLevel"
    $arrayExpToLevel = $xml->Data[0]['data'];
    echo "Data from XML: $arrayExpToLevel";
} else {
    echo "Invalid method.";
}

?>
