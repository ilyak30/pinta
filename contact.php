<?php  include("blocks/db.php"); 
$result=mysql_query("select title,text from settings where page='contacts'", $db);

if (!$result)
{  echo "<p>������ ��� ���������� ������. ��� ������: </p>";
   exit(mysql_error());}

if (mysql_num_rows($result)>0)
    {$myrow2=mysql_fetch_array($result);}  
 else
    {echo "���������� �� ����� ���� ���������.";}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1251">

  <title>
     <?php printf("�������� &quot;�����&quot; "); ?>
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
	    //echo "<H2 class='tail'>���������� ����������: ".$myrow1["view"]."</H2>";
	    //include("blocks/tail.php"); 
	?>
   </div>
   <div id="apDivTail2">
     <p>C��� ���������� ���������� ��� ��������� &#8220;�����&#8221; � �������������� ���� :-) </p> 
   </div>
   
 
</body>
</html>