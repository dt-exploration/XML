<?php
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>";

$parsed_xml=simplexml_load_string($myXMLData);
//echo $parsed_xml->to;

$parsed_from_file=simplexml_load_file("books.xml");
//echo $parsed_from_file->book[0]->title;
echo $parsed_from_file->book[0]['category'];
echo $parsed_from_file->book[1]->title['lang'];

 ?>
