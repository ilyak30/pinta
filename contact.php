<?php  include("blocks/db.php"); 
$result=mysql_query("select title,text from settings where page='contacts'", $db);

if (!$result)
{  echo "<p>Ошибка при извлечении данных. Код ошибки: </p>";
   exit(mysql_error());}

if (mysql_num_rows($result)>0)
    {$myrow2=mysql_fetch_array($result);}  
 else
    {echo "Информация не может быть извлечена.";}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1251">

  <title>
     <?php printf("Магазины &quot;Пинта&quot; "); ?>
  </title>
  <link href='style.css' rel='stylesheet' type='text/css'>
</head>

<body>
<div id="apDivTitle">
  <?php include("blocks/header.php"); ?>
</div>

<div id="apDivLeft">
  <?php 
     include("blocks/left.php"); 
  ?>
</div>
<div id="apDivMenu">
  	<?php  
	    include("blocks/nav.php"); 
	    echo "<br><br>";
	    
	    echo "<br><br>";
	    echo "<H1 class='head'>".$myrow2["title"]."</H1>";
	    echo $myrow2["text"];
	?>
</div>
 

  <div id="apDivTail">
	<?php 
	    include("blocks/tail.php");
	    //echo "<H2 class='tail'>Количество просмотров: ".$myrow1["view"]."</H2>";
	    //include("blocks/tail.php"); 
	?>
   </div>
   <div id="apDivTail2">
     <p>Cайт разработан специально для магазинов &#8220;Пинта&#8221; и поддерживается мной :-) </p> 
   </div>
   
 
</body>
</html>