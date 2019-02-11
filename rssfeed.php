<?php

<?php
//Creating rss feed

$doc=new DOMDocument();

$rss=$doc->createElement('rss');
$channel=$doc->createElement('channel');

$c_title->createElement('title');
$c_link->createElement('link');
$c_description->createElement('description');
$c_language->createElement('language');

$item->createElement('item');
$i_title->createElement('title');
$i_link->createElement('link');
$i_description->createElement('description');

$doc->appendChild($rss);
$rss->appendChild($channel);

$channel->appendChild($c_title);
$channel->appendChild($c_link);
$channel->appendChild($c_description);
$channel->appendChild($c_language);

header('content type: text/xml');
$et=$doc->saveXML();

echo $et;






?>
