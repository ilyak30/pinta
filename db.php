<?php 
ini_set(default_charset, "cp1251"); //set the codepage for each php-file, 
//as that particular file calls from each page so it's enough to put it here
//since php version 5.6 the charset="utf-8" by default and need ot be changed 
//in php.ini (for cpanel it's burdesome) or by using "ini_set()" function

$db=mysql_connect("localhost","ilyak30_julya","Pinta345"); //P1nt@345! // HwWpb)n[HOMb
mysql_query('set names cp1251');
$resDBcon =mysql_select_db("ilyak30_pinta",$db);

if (!$resDBcon)
{echo "<p>Ошибка при извлечении данных. Код ошибки (db): </p>";
exit(mysql_error());}
?>

