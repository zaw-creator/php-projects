<?php 


$xml = simplexml_load_file('rate.xml');


$rates = $xml->xpath("//rate[@live='1']/@code");


foreach ($rates as $key=>$val) {$codes[] =(string) $val;}








?>