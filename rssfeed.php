<?php

<?php
//Creating rss feed

$doc=new DOMDocument();


$rss=$doc->createElement('rss');
$channel=$doc->createElement('channel');
$doc->createElement('item');
$doc->createElement('title');
$doc->createElement('link');
$doc->createElement('description');
header('content type: text/xml')






?>
