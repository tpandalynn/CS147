<?
$filename = "http://www.education.com/service/service.php?f=gbd&key=ea28325b5ea07ffd3406e9e2abb199db&sn=sf&resf=xml";
$count=0;

echo "F: $filename<br>";

$xml = simplexml_load_file($filename);
var_dump($xml);

$schoolLink = $xml->lsc;
$logoSrc = $xml->logosrc;

echo "Found: $count<br>";

echo "Logo: $logoSrc SL: $schoolLink ";

?>