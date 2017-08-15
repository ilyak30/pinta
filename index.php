<?php  
//ini_set(default_charset, "cp1251");
//<div style="float:left;width:260px;">

require_once("blocks/db.php");
//include("blocks/db.php"); 
$result=mysql_query("select title,text,view from settings where page='index'", $db);

if (!$result)
{	$err=mysql_error();
	echo "<p>Ошибка при извлечении данных. Код ошибки (index): $err </p>";
	$res1=mysql_query("ALTER TABLE `settings` ADD `view` INT(13) NOT NULL COMMENT 'view_count'", $db); 
	//ALTER TABLE `settings` CHANGE `view` `view` INT(14) NOT NULL DEFAULT '0' 
	exit(mysql_error());
}

if (mysql_num_rows($result)>0)
{
	$myrow1=mysql_fetch_array($result);
	$view=$myrow1['view']+1;
	$res1=mysql_query("update settings set view='$view' where page='index'", $db);
} 
else
{
	echo "Информация не может быть извлечена.";
	$res1=mysql_query("update settings set view='$view' where page='index'", $db);
}

echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> <html>';
echo '<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1251">';
//echo htmlentities($str, ENT_COMPAT); 

//header('Content-Type: text/html; charset=utf-8');
//charset=windows-1251
//mb_http_input("utf8_general_ci");
//mb_http_output("utf8_general_ci");
//<head>

?>


<title>
   <?php
    //printf(<snap onMouseOver="""style.backgroundColor='yellow'""" onmouseout=""""style.backgroundColor='white'"""> asdf</snap>);
    printf("Магазины &quot;_Пинта_&quot; ");
   ?>
</title>
<link href='style.css' rel='stylesheet' type='text/css'>
<?php
   //echo "<link href='style.css' rel='stylesheet' type='text/css'>";
?>
<style type="text/css">
<!-- 
#apDiv1 {
	position:absolute;
	width:924px;
	height:49px;
	z-index:31;
	left: 91px;
	top: 385px;
}
-->
/**/

</style>
<script type="text/javascript">
// Добавим поддержку тега-спойлера
  
$('.spoiler_title').live('click', function()
{
    var spoiler = $(this).parent('.spoiler');

    $('> .spoiler_text', spoiler).slideToggle();

    spoiler.toggleClass('spoiler_open');
  });

  

  $('#global_notify .close').live('click', function()
{

    var id = $(this).attr('data-id');

    var curent_notification = $('#notification_'+id);

    var next_notification = curent_notification.next('.inner');

    curent_notification.remove();

    if(next_notification) next_notification.removeClass('hidden');

    
    $.post('/json/notifications/close/',  { 'id' : id }, function(json)
{
        if(json.messages =='ok'){
          
        }
else{
          show_system_error(json);

        }
    },'json');

    
    return false;
  });
});


</script>
</head>


<body>

<div id="apDivTitle">
  <?php include("blocks/header.php"); 
   
  ?>
</div>

<div id="apDivLeft">
  <?php 
     include("blocks/left.php"); 
  ?>
</div>
<div id="apDivMenu">
  	<?php  
	    include("blocks/nav.php"); echo "<br><br>";
	?>
    
</div>

<!--  <br/><div class="spoiler"><b class="spoiler_title">Кабель, разделанный до модулей</b><div class="spoiler_text"><img src="img/thumbnail.bmp"/></div></div><br/> -->

<div id="apTopLeft">
	<?php
	  //printf("<img src='Img/pinta2.jpg' width='400' height='160' alt='pinta_banner'>  ");
	?>
</div>
<div id="apDivMain">	
	<?php 
	    echo "</br>";
	    echo "<H1 class='head'>".$myrow1["title"]."</H1>";
		
		echo $myrow1["text"];
		//printf("<br><img src='Img/pinta2.jpg' width='400' height='160' text-align='center' alt='pinta_banner'> ");
	?>
    <!-- <div id="InsideMain" align="center"><br><img src='Img/pinta2_4.jpg' width='400' height='160' alt='pinta_banner'></div> -->
    
</div>
<div id="apDivTail">
	<?php 
	    echo "<H2 class='tail'>Количество просмотров: ".$myrow1["view"]."</H2>";
		//include("blocks/tail.php"); 
	?>
</div>
<div id="apDivTail2">
    <p>Cайт разработан специально для магазинов &#8220;Пинта&#8221; и поддерживается мной :-)</p>
</div>

</body>
<div style="text-align: center;">
<div style="position:relative;
 top:0; 
 margin-right:auto;margin-left:auto; 
 z-index:0"><center><div id='adv_block_1364035437828'>
 </div>
 
</html>
