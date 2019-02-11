<?php
header('content-type:text/xml');

$document=new DomDocument();
$bookstore = $doc->createElement('knjizara');
$doc->appendChild($bookstore);


$book = $doc->createElement('knjiga');
$book -> setAttribute('kategorija','Kulinarstvo');

$b_title=$doc->createElement('ime','Tvrdjava')
$b_author=$doc->createElement('autor','Mesa Selimovic');
$b_year=$doc->createElement('godina','1975')
$b_price=$doc->createElement('cena','500')





?>
