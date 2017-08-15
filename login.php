<?php
  require_once("blocks/db.php");
  //validate username
  if (!empty($_POST['txtUserName']))
  {
	  $username=$_POST['txtUserName'];
  }
  else
  {
	  $username=NULL;
	  echo '<p><font color="red"> You forgot to enter a username</font></p>';
  }
  $password=$_POST['txtPassword'];
  $dbRecords=mysql_query("select * from registry where username='$username' and password='$password'",$db) or die("Problem reading table: " . mysql_error());
  /* function mysql_real_escape_string - prepends nackslashes to the following characters: \x00, \n, \r, ' " and \x1a
    which allow to escape injection is to escape characters that have a special meaning in SQL
  $query = sprintf("select * from 'Users' where Username ='%s' and Password='%s'",
					 mysql_real_escape_string($Username),
					 mysql_real_escape_string($Password));
  */
  //$sql = "CREATE TABLE registry(\n" . "username VARCHAR(40) NOT NULL,\n" . "password VARCHAR(50) NOT NULL,\n" . "PRIMARY KEY (username)\n" . ")";
//$sql = "INSERT INTO registry(username, password) VALUES \n" . "(\'il\',\'123\')";
  $count=0;
  while ($arrRecords=mysql_fetch_array($dbRecords))
  {
	  $count++;
  }
  if ($count != 0)
  {
	session_start();
	$_SESSION['myLog']=55;
	//header('Location: editor.php?myVal1=33');
	//$output = call_page('editor.php?myVal1=33');
	//echo $output;
	//include('editor.php');//single qute don't work
	//session_destroy();
	include("editor.php");

  }
  else
  {
	  echo "You cannot log in. Incorrect name or password. Try again </br>";
	  printf ("You must to log on through the next page: <a href='loginform.html'> loginform.html</a> </br>");
	  //printf("<a href='view_cat.php?id=%s'>%s</a><br><br>",$myrow["id"],$myrow["title"]);
  }

?>