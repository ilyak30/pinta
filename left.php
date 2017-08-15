<?php 
//echo "<br>;
$res=mysql_query("SELECT id,title FROM data",$db);
if (!$res)
{echo "<p>Ошибка при извлечении данных. Код ошибки (left):";
exit(mysql_error());
}
printf("<br><p>");
if (mysql_num_rows($res)>0)
{
	echo "Адреса магазинов: ";
	printf("<br><p>");
	$myrow=mysql_fetch_array($res);
	do {
		printf("<a href='view_cat.php?id=%s'>%s</a><br><br>",$myrow["id"],$myrow["title"]); 
		}while($myrow=mysql_fetch_array($res));
} 
else
{echo "Информация не может быть извлечена.";}

?>



