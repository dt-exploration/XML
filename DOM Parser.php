<?php

$xml = new DOMDocument ();
$xml->load('rex.xml');

//$xml_for_printing=$xml->saveXML();
//echo $xml_for_printing;

$niz_nodova = $xml->documentElement->childNodes;

var_dump($niz_nodova);


foreach($niz_nodova as $item) {
    echo $item->nodeName."  ".$item->nodeValue."<br>";
}

 ?>
