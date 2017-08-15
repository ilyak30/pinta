<?php 
//echo "<br>;
include("blocks/db.php"); 
//ini_set(default_charset, "cp1251"); 
//INSERT INTO `ilyak30_pinta`.`photo` (`ID`, `Path`, `Comment`, `Date_create`, `Date_modify`) VALUES ('6', 'Img/303992.jpg', 'some picture', '2017-05-13', '2017-05-13');
$res=mysql_query("SELECT * FROM photo",$db);
//`ID``Path``Comment``Date_create``Date_modify`
if (!$res)
   {echo "Ошибка при извлечении данных. Код ошибки (left):";
   exit(mysql_error());
   }
//printf("<br>");
if (mysql_num_rows($res)>0)
{
	printf("Фотогалерея магазинов:");
	//printf(htmlentities($str, ENT_QUOTES,"cp1251"));
	printf("<div class='highslide-gallery'>");
	$myrow=mysql_fetch_array($res);
	do {
		printf("<ul><li>");
//		printf("<a href='view_cat.php?id=%s'>%s</a><br><br>",$myrow["id"],$myrow["title"]);
//		<img src="Img/pinta-logo4.jpg" width="800" height="50" alt="logotip"> 
		//printf("<a href='../%s' class='highslide' title='%s' onclick='return hs.expand(this, config1 )'> <img src='../%s' width='50' height='50' alt='Изображения Пинты' title='Нажмите чтобы увеличить' /></br>",$myrow["Path"],$myrow["Comment"],$myrow["Path"]); 
		printf("<a href='../%s' class='highslide' title='%s' onclick='return hs.expand(this)'> <img src='../%s' width='50' height='50' alt='Изображения Пинты' title='Нажмите чтобы увеличить' /></br>",$myrow["Path"],$myrow["Comment"],$myrow["Path"]); 
		printf("</a></li></ul>");		
		
		
	   }while($myrow=mysql_fetch_array($res));
	printf("</div>");	   
} 
else
{echo "Информация не может быть извлечена.";}

?>
