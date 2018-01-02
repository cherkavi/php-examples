<html>

<head>
  <title></title>
</head>

<body>

<?php
$link=mysql_connect("localhost","root","") or die("Error connection");
mysql_select_db("telephone_book") or die ("Not open database");
$query="select * from phonebook";
$result=mysql_query($query,$link);
$i=mysql_num_rows($result);
echo $i;
$record_index=0;
while ($record_index<mysql_num_rows($result))
       {
        // вынимание записей по строкам
        $result_array=mysql_fetch_array($result);
        /*foreach($result_array as $a)
                {
                 echo "<br> $a";
                 }*/
        while(list($keys,$values)=each($result_array))echo "$keys   $values <br>";
        echo "<br>";

        // вынимание записей по индексу строки и имени поля
        $number=mysql_result($result,$record_index,"number");
        $name=mysql_result($result,$record_index,"name");
        echo ">>>  $number   $name <br>";

        $record_index++;
        }

mysql_close();
?>

</body>

</html>