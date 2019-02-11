<?php

<?php
//Creating rss feed

$rss=new DOMDocument();


$rss=$doc->createElement('rss');
$doc->createElement('channel');
$doc->createElement('item');
$doc->createElement('title');
$doc->createElement('link');
$doc->createElement('description');
header('content type: text/xml')






?>
