<html>
<head>
</head>
<body>
<?php
$my_host="localhost";
$username="root";
$password="password";
//$link=ibase_connect("D:\work\OsnFond\OutPut_Data\GDB folder\osnfond.gdb" ,'SYSDBA','masterkey');
$link=ibase_connect("$my_host:D:\work\OsnFond\OutPut_Data\GDB folder\osnfond.gdb" ,'SYSDBA','masterkey');

if($link)
   {
   $result=ibase_query($link,"SELECT ID S_DOKACHKA_ID,DATE_DOKACHKA S_DOKACHKA_DATE_DOKACHKA,ORGANIZATION S_DOKACHKA_ORGANIZATION,KOLICHESTVO S_DOKACHKA_KOLICHESTVO,ISP S_DOKACHKA_ISP,FILENAME S_DOKACHKA_FILENAME FROM S_DOKACHKA");
   // результаты запроса по номерам столбцов
   while($fetch_row=ibase_fetch_row($result))
        {        print "<br>new line<br>";
        for($i=0;$i<count($fetch_row);$i++)
           {           print "$i: $fetch_row[$i]<br>";           }
        print "end line <br>";        }
   ibase_free_result($result);

   $result=ibase_query($link,"SELECT ID S_DOKACHKA_ID,DATE_DOKACHKA S_DOKACHKA_DATE_DOKACHKA,ORGANIZATION S_DOKACHKA_ORGANIZATION,KOLICHESTVO S_DOKACHKA_KOLICHESTVO,ISP S_DOKACHKA_ISP,FILENAME S_DOKACHKA_FILENAME FROM S_DOKACHKA");
   // результаты запроса по имени столбцов в ассоциативном массиве
   while($fetch_row=ibase_fetch_assoc($result))
        {
        print "<br>new line<br>";
        $result_data=$fetch_row["S_DOKACHKA_ID"];
        print "S_DOKACHKA_ID $result_data &nbsp&nbsp&nbsp&nbsp";

        $result_data=$fetch_row["S_DOKACHKA_DATE_DOKACHKA"];
        print "S_DOKACHKA_DATE_DOKACHKA $result_data &nbsp&nbsp&nbsp&nbsp";

        $result_data=$fetch_row["S_DOKACHKA_ORGANIZATION"];
        print "S_DOKACHKA_ORGANIZATION $result_data &nbsp&nbsp&nbsp&nbsp";

        $result_data=$fetch_row["S_DOKACHKA_KOLICHESTVO"];
        print "S_DOKACHKA_KOLICHESTVO $result_data &nbsp&nbsp&nbsp&nbsp";

        $result_data=$fetch_row["S_DOKACHKA_ISP"];
        print "S_DOKACHKA_ISP $result_data &nbsp&nbsp&nbsp&nbsp";

        $result_data=$fetch_row["S_DOKACHKA_FILENAME"];
        print "S_DOKACHKA_FILENAME $result_data &nbsp&nbsp&nbsp&nbsp<br>";

        print "end line <br>";
        }
   ibase_free_result($result);
   echo "ok";
   // результаты по имени в объекте
   $query="SELECT
           ID S_DOKACHKA_ID,DATE_DOKACHKA S_DOKACHKA_DATE_DOKACHKA,ORGANIZATION S_DOKACHKA_ORGANIZATION,KOLICHESTVO S_DOKACHKA_KOLICHESTVO,ISP S_DOKACHKA_ISP,FILENAME S_DOKACHKA_FILENAME, S_ORG.SHORT_NAME_OBJ S_ORG_NAME
           FROM S_DOKACHKA
           LEFT JOIN S_ORG ON S_ORG.KOD_OBJ=S_DOKACHKA.ORGANIZATION
           WHERE S_DOKACHKA.ID=1";
   $result=ibase_query($link,$query);
   // результаты запроса по имени столбцов в ассоциативном массиве
   while($fetch_row=ibase_fetch_object($result))
        {
        print "<br>new line<br>";
        $result_data=$fetch_row->S_DOKACHKA_ID;
        print "S_DOKACHKA_ID $result_data &nbsp&nbsp&nbsp&nbsp";

        $result_data=$fetch_row->S_DOKACHKA_DATE_DOKACHKA;
        print "S_DOKACHKA_DATE_DOKACHKA $result_data &nbsp&nbsp&nbsp&nbsp";

        $result_data=$fetch_row->S_DOKACHKA_ORGANIZATION;
        print "S_DOKACHKA_ORGANIZATION $result_data &nbsp&nbsp&nbsp&nbsp";

        $result_data=$fetch_row->S_DOKACHKA_KOLICHESTVO;
        print "S_DOKACHKA_KOLICHESTVO $result_data &nbsp&nbsp&nbsp&nbsp";

        $result_data=$fetch_row->S_DOKACHKA_ISP;
        print "S_DOKACHKA_ISP $result_data &nbsp&nbsp&nbsp&nbsp";

        $result_data=$fetch_row->S_DOKACHKA_FILENAME;
        print "S_DOKACHKA_FILENAME $result_data &nbsp&nbsp&nbsp&nbsp<br>";

        $result_data=$fetch_row->S_ORG_NAME;
        print "S_DOKACHKA_FILENAME $result_data &nbsp&nbsp&nbsp&nbsp<br>";

        print "end line <br>";
        }
   ibase_free_result($result);
   ibase_close($link);
    }
else {echo "bad";};
?>
</body>
</html>