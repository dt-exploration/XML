<?php
header('content-type: text/xml');

//Creating rss feed
$doc=new DOMDocument();

$rss=$doc->createElement('rss');
$rss->setAttribute('version','2.0');
$channel=$doc->createElement('channel');

$c_title = $doc->createElement('title','Dreamscape');
$c_link = $doc->createElement('link','https://www.dreamscape.games');
$c_description = $doc->createElement('description','Video games');
$c_language = $doc->createElement('language','en');

$doc->appendChild($rss);
$rss->appendChild($channel);

$channel->appendChild($c_title);
$channel->appendChild($c_link);
$channel->appendChild($c_description);
$channel->appendChild($c_language);

$matrix=array(
              1 => array(
                         'title' => 'Site 1'
                         'link' => 'https://www.google.com'
                          'description' => 'Search engine'
                        ),
              2 => array(
                         'title' => 'Site 2'
                         'link' => 'https://www.youtube.com'
                         'description' => 'Video database';
                        )
             )
foreach($matrix as $d) {

    $item = $doc->createElement('item');
    $i_title = $doc->createElement('title',$d['title']);
    $i_link = $doc->createElement('link',$d['link']);
    $i_description = $doc->createElement('description',$d['description']);

    $item->appendChild($i_title);
    $item->appendChild($i_link);
    $item->appendChild($i_description);

    $channel->appendChild($item);

}


$et=$doc->saveXML();

echo $et;


?>
