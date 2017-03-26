<?php
$xml = simplexml_load_file('http://www.contabeis.com.br/rss/noticias/');
?>
<div style="width: 100%; color: #ECECEC; text-align: center; background-color: #6C7A89; margin-top: -20px; margin-bottom: -15px;"><h3>Notícias</h3></div>
<hr style="border: 1px #6C7A89 solid;">
<?php
for ($n = 0; $n <= 5; $n++) {
    ?>
    <div class="all-noticias" style="padding: 5px; margin-top: -20px; margin-bottom: -20px;">
        <div style="color:#ECECEC;text-align: center;"><h4><?= $xml->channel->item[$n]->title; ?></h4></div>
        <div style="text-align: justify;"><?php $descrição = explode("Leia mais em", $xml->channel->item[$n]->description); echo $descrição[0];
                                                $desc_1 = $descrição[1];$desc_2 = explode('>', $desc_1); echo $desc_2[0].">Leia Mais</a>";?></div>
        <div style="text-align: center;"><?= $xml->channel->item[$n]->pubDate; ?></div>
        
    </div>
    <hr style="border: 1px #6C7A89 solid;">
<?php }  ?>

