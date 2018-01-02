<html>

<head>
  <title></title>
</head>

<body>

<?php
//$username=$_GET["textbox1"];//$textbox1=$_POST["textbox1"];
$textbox1=$_REQUEST["textbox1"];// универсальный способ, который объединяет _GET,_POST,_REQUEST
$textbox_hidden=$_POST["textbox_hidden"];
$textbox_password=$_POST["textbox_password"];
$memo1=$_POST["memo1"];
$radio_group1=$_POST["radio_group1"];
$radio_group2=$_POST["radio_group2"];
$checkbox_1=$_POST["checkbox_1"];
$checkbox_2=$_POST["checkbox_2"];
$listbox1=$_POST["listbox1"];
if (isset($textbox1)&&isset($textbox_hidden)&&isset($textbox_password)&&isset($memo1))
  {  	print "your input name:$textbox1<br>";
  	print "your hidden text:$textbox_hidden<br>";
  	print "your password:$textbox_password<br>";
  	print "your memo:$memo1<br>";
  	if(isset($radio_group1)){print "radio1:$radio_group1<br>";};
  	if(isset($radio_group2)){print "radio2:$radio_group2<br>";};
  	if(isset($checkbox_1)){print "checkbox1=$checkbox_1<br>";};
	if(isset($checkbox_2)){print "checkbox2=$checkbox_2<br>";};
	if(isset($listbox1)){print "listbox1.items[listbox1.itemindex]=$listbox1";};  }
else
  {  	print "Not assign name";  };



?>

</body>

</html>