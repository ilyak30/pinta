<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Untitled Document</title>

<script type="text/javascript"> 
///// DynamicDrive.com added function/////////////

var onclickaction="alert"

function goListGroup(){
for (i=arguments.length-1;i>=0; i--){
if (arguments[i].selectedIndex!=-1){
var selectedOptionvalue=arguments[i].options[arguments[i].selectedIndex].value
if (selectedOptionvalue!=""){
if (onclickaction=="alert")
document.listmenu0.submit()
else if (newwindow==1)
window.open(selectedOptionvalue)
else
window.location=selectedOptionvalue
break
}
}
}
}
</script>

</head>

<body>
<form action="http://www.gdexpress.com/int_rate.php" method="post" name="listmenu0">
<input type="hidden" name="rate" value="0"> 
<select name="firstlevel" style="width:180px;">
<option value="">Africa</option> --Africa--AFR
</select> 
<select name="dest_country" style="width:180px;">
<option value="">Algeria</option> --Algeria--AG
</select> 
<select name="contype" style="width:180px;">
<option value="">Document</option> 
</select> 
<select name="packageweight" style="width:100px;">
<option value="">1.0</option> 
</select> 
<input type="submit" value="Calculate" name="calculate"> 
<input type="submit" value="Calculate2" name="calculate2" onclick="return check();goListGroup(document.listmenu0.firstlevel, document.listmenu0.dest_country)">
</form>

</body>
</html>
