<?php

$xml = simplexml_load_file('http://www.contabeis.com.br/rss/noticias/');

for ($n = 0; $n <= 5; $n++) {
    echo "Noticias: " . $xml->channel->item[$n]->title;
    echo "<br>Descrição: " . $xml->channel->item[$n]->description;
    echo "<br>Data: " . $xml->channel->item[$n]->pubDate;
}

