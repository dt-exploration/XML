<?php
header('content-type:text/xml');

$doc=new DomDocument();

$bookstore = $doc->createElement('knjizara');

$book = $doc->createElement('knjiga');
$book -> setAttribute('kategorija', 'beletristika');

$doc -> appendChild($bookstore);
$bookstore -> appendChild($book);

$b_title = $doc -> createElement('ime', 'Tvrdjava');
$b_author = $doc -> createElement('autor', 'Mesa Selimovic');
$b_year = $doc -> createElement('godina', '1975');
$b_price = $doc -> createElement('cena', '500');

$book -> appendChild($b_title);
$book -> appendChild($b_author);
$book -> appendChild($b_year);
$book -> appendChild($b_price);

///////////////////////////////////////////////////////////////
$book= $doc -> createElement('knjiga');
$book->setAttribute('kategorija','drama');
$bookstore->appendChild($book);

$b_title = $doc -> createElement('ime', 'Koreni');
$b_author = $doc -> createElement('autor', 'Dobrica Cosic');
$b_year = $doc -> createElement('godina', '1956');
$b_price = $doc -> createElement('cena', '1000');

$book -> appendChild($b_title);
$book -> appendChild($b_author);
$book -> appendChild($b_year);
$book -> appendChild($b_price);
/////////////////////////////////////////////////////////////////
$book= $doc -> createElement('knjiga');
$book->setAttribute('kategorija','nauka');
$bookstore->appendChild($book);

$b_title = $doc -> createElement('ime', 'Poreklo vrsta');
$b_author = $doc -> createElement('autor', 'Carls Darvin');
$b_year = $doc -> createElement('godina', '1845');
$b_price = $doc -> createElement('cena', '1500');

$book -> appendChild($b_title);
$book -> appendChild($b_author);
$book -> appendChild($b_year);
$book -> appendChild($b_price);
///////////////////////////////////////////////////////////////////
$book= $doc -> createElement('knjiga');
$book->setAttribute('kategorija','ratni');
$bookstore->appendChild($book);

$b_title = $doc -> createElement('ime', 'Tri ratna druga');
$b_author = $doc -> createElement('autor', 'Remark');
$b_year = $doc -> createElement('godina', '1936');
$b_price = $doc -> createElement('cena', '2000');

$book -> appendChild($b_title);
$book -> appendChild($b_author);
$book -> appendChild($b_year);
$book -> appendChild($b_price);


$eko = $doc->saveXML();
echo $eko;


?>
