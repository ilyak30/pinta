<?php 
//echo "<br>;
$res=mysql_query("SELECT id,title FROM data",$db);
if (!$res)
{echo "<p>������ ��� ���������� ������. ��� ������ (left):";
exit(mysql_error());
}
printf("<br><p>");
if (mysql_num_rows($res)>0)
{
	echo "������ ���������: ";
	printf("<br><p>");
	$myrow=mysql_fetch_array($res);
	do {
		printf("<a href='view_cat.php?id=%s'>%s</a><br><br>",$myrow["id"],$myrow["title"]); 
		}while($myrow=mysql_fetch_array($res));
} 
else
{echo "���������� �� ����� ���� ���������.";}

?>



