<?php  include("blocks/db.php"); 
if (isset($_GET['id'])) {$id=$_GET['id'];} else {$id=1;}
$result=mysql_query("select id,title,text,date,view from data where id='$id'", $db);

if (!$result)
{echo "<p>Ошибка при извлечении данных. Код ошибки: </p>";
exit(mysql_error());}

if (mysql_num_rows($result)>0)
{$myrow2=mysql_fetch_array($result);
$view=$myrow2['view']+1;
$res2=mysql_query("update data set view='$view' where id='$id'", $db);
} else
{echo "Информация не может быть извлечена.";}
mb_http_input("windows-1251");
mb_http_output("windows-1251");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title><?php ?></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>


<body>
<div id="apDivTitle">
  <?php include("blocks/header.php"); ?>
</div>
<div id="apDivMenu">
  	<?php  
	    include("blocks/nav.php"); 
		//echo "<br><br>";
	?>
</div>
<div id="apDivLeft">
  <?php  include("blocks/left.php"); ?>
</div>

<div id="apDivMain">	

  	<?php  
	    echo "<H1 class='head'>".$myrow2["title"]."</H1>";
		
		printf ("<p class='text'>%s</p>",$myrow2["text"]);
		
		//echo $myrow2["text"];
		//echo "<H1 class='head'>".$myrow2["title"]."</H1>";
	?>
</div>

<div id="apDivTail">
	<?php 
		//printf ("<p class='tail'>Дата добавления: %s Просмотров: %s</p>",$myrow2["date"],$myrow2["view"]);

		//echo "<H2 class='tail'>Количество просмотров: ".$myrow2["view"]."</H2>";
		include("blocks/tail.php"); 
	?>
</div>

</body>
</html>