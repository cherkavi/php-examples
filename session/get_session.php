<?php
// начинаем сессию
session_start();
// проверка на определение переменной из предыдущей сессии
if(isset($_SESSION["value_for_send"]))
{
	$temp=$_SESSION["value_for_send"];
	print "<form action=\"begin_session.php\" method=\"POST\">";
	print "<input type=\"text\" value=\"$temp\" size=\"40\" maxlength=\"256\" >";
	// вызывает предупреждение о применении переменной, которая может быт не определена
	//print "<input type=\"text\" value=\"{$_SESSION[value_for_send]}\" size=\"40\" maxlength=\"256\" >";
	print "<input type=\"submit\" value=\"Try Again\">";
	print "</form>";
	// уничтожение переменной 
	unset($_SESSION["value_for_send"]);
	session_destroy();
}
else 
{
	print "Error in recieve _SESSION";
}

?>
