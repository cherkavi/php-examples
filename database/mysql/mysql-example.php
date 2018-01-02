<html>

<head>
  <title></title>
</head>

<body>

<?php

$link1=mysql_connect("localhost","root","",true) or die("connect not allow");
$link2=mysql_connect("localhost","root","",true) or die("new connect is false");

mysql_select_db("telephone_book",$link2);
mysql_select_db("telephone_book",$link1);

$query1="select phonebook.name, phonebook.number from phonebook";
$query2="select name_full.full_name, name_full.id from name_full";

$result=mysql_query($query1,$link1);
$result2=mysql_query($query2,$link2);

$filename1="c:\\out.txt";
$f1=fopen("c:\\out.txt","w");


$n=mysql_num_rows($result);
for($i=1;$i<=$n;$i++)
   {
    $name=mysql_result($result,$i-1,"name");
    $number=mysql_result($result,$i-1,"number");
    echo "Name: $name     Number: $number<br>";
    fputs($f1,"$name     $number\n");

    }
fclose($f1);
$n=mysql_num_rows($result2);
for($i=1;$i<=$n;$i++)
   {
    $full_name=mysql_result($result2,$i-1,"full_name");
    $id=mysql_result($result2,$i-1,"id");
    echo " $full_name    $id  <br>";
    }

?>

</body>

</html>