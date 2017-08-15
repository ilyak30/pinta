<?php 
session_start();
//echo $_SESSION['myLog'];
//$_GET['myVal1'];
if (isset($_SESSION['myLog']))
//if (isset($_GET['myVal1']))
{
	$Login=$_SESSION['myLog'];
	//$Login=$_GET['myVal1'];
	//session_destroy();
}
else
{
	echo "Error on sesson settings.</br>";
}
session_destroy();
if ($Login=='55')
{
  require_once("blocks/db.php");
  //$dbRecords=mysql_query("select text from settings where page='index'",$db) or die("Problem reading table: " . mysql_error());
  //$dbRecords=mysql_query("select * from settings",$db) or die("Problem reading table: " . mysql_error());
  $dbRecords=mysql_query("select settings.title,settings.text from settings union select data.title,data.text from data ",$db) or die("Problem reading table: " . mysql_error());
  //$result=mysql_query("select title,text,view from settings where page='index'", $db);
  //$myrow1=mysql_fetch_array($dbRecords);
  
if (mysql_num_rows($dbRecords)>0)
{
	$myrow2=mysql_fetch_array($dbRecords);
	//$view=$myrow2['view']+1;
	//$res1=mysql_query("update settings set view='$view' where page='index'", $db);
	$iFldCnt=0;
	printf ("<div class='Edit' id='field1'> 		  <form action='accept_correction.php' method='post' name='EditForm%s'>",$iFldCnt);
	do 
	{
		$iFldCnt++;
	    printf (" <textarea name='txt%s' cols='80' rows='15'>",$iFldCnt);
	    echo $myrow2["text"];
		printf (" </textarea> ");

		printf (" <textarea name='ttl%s' cols='40' rows='5'>",$iFldCnt);
	    echo $myrow2["title"];
		printf (" </textarea> ");
		
	}
	while ($myrow2 = mysql_fetch_array($dbRecords));	
	printf ("<div class='Btn' id='BtnOk1'> <input type='submit' name='idOK' id='idOK' value='Принять изменения')></div></form>");
	printf (" <form action='index.php' method='post' name='CancelEditForm'><div class='Btn' id='BtnOk2'> <input type='submit' name='idCncl' id='idCncl' value='Отмена')></div></form></div>");
	//header('Location: index.php')
} 
else
{
	echo "Информация не может быть извлечена.</br>";
}
}
else
{
	  printf ("You must to log on through the next page: <a href='loginform.html'> loginform.html</a> </br>");
}
?>

    <?php /*
<div class="Edit" id="field1">
  <form action="accept_correction.php" method="post" name="EditForm">
    <textarea name="txtField1" cols="80" rows="25">
    <?php 
	  //$myrow1=mysql_fetch_array($dbRecords);
	  echo $myrow2["text"];
    ?>
    
    </textarea>
    <input type="submit" name="idOK" id="idOK" value="Submit">
    
  </form>
</div>
*/?>
