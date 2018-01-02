<html>

<head>
  <title></title>
</head>

<body>

<?php
// вывод предупреждений, если они были отключены
ini_set("display_errors","1");
ini_set("error_reporting",E_ALL);// E_ERROR - вывод только ошибок,
// соединение с сервером MYSQL
$link_mysql=mysql_connect('127.0.0.1','root','');
if($link_mysql==0)
    {  	print "error connect to MYSQL<br>";    }
else{	print "connected to MYSQL<br>";
	// выбор базы данных на сервере
	if(mysql_select_db('temp_base',$link_mysql)==true)
	     {	   	 print "connected to TEMP_BASE<br>";
	   	 $query_to_base="SELECT TABLE1.NAME TABLE1_NAME,S_KIND.NAME S_KIND_NAME, S_TYPE.NAME S_TYPE_NAME
	   	 			     FROM TABLE1
	   	 			     LEFT JOIN S_KIND ON S_KIND.KOD=TABLE1.KIND
	   	 			     LEFT JOIN S_TYPE ON S_TYPE.KOD=TABLE1.TYPE";
	   	 // обращаемся с запросом к базе данных
	   	 $result_mysql=mysql_query($query_to_base,$link_mysql);
		 // получение данных из запроса - перебор номеров полей из строки
		 print "Begin query:<br>";
		 while($result_row=mysql_fetch_row($result_mysql))
		      {		      for($i=0;$i<count($result_row);$i++)
		         {		         print "$i: $result_row[$i];";		         }
		      print "<br>";
		      }
		 print "end query:<br>";
         // перемещение указателя на текущую результирующую строку - перемещение на начало запроса
		 mysql_data_seek($result_mysql,0);
		 // получение результата из запроса - перебор имен полей из строки
		 print "Begin query<br>";
		 while($result_row=mysql_fetch_array($result_mysql))
		 	  {		 	  $table1_name=$result_row["TABLE1_NAME"];
		 	  $s_kind_name=$result_row["S_KIND_NAME"];
		 	  $s_type_name=$result_row["S_TYPE_NAME"];
			  print "table_name:<b>$table1_name</b>       s_kind_name:<b>$s_kind_name</b>       s_type_name:<b>$s_type_name</b><br>";
		 	  }
		 print "End query";
		 // получение результата из запроса - перебор имен полей
		 print "<br><br>begin query:<br>";
		 $i=0;
		 while($i<mysql_num_rows($result_mysql))
		      {		      $table1_name=mysql_result($result_mysql,$i,"TABLE1_NAME");
			  $s_kind_name=mysql_result($result_mysql,$i,"S_KIND_NAME");
			  $s_type_name=mysql_result($result_mysql,$i,"S_TYPE_NAME");
			  $i++;
			  print "table_name:<b>$table1_name</b>       s_kind_name:<b>$s_kind_name</b>       s_type_name:<b>$s_type_name</b><br>";		      }
		 print "end query<br>";
	     }
	else {		 print "TEMP_BASE not connected<br>";
		 }
	}
?>

</body>

</html>