<?php
// �������� ������
session_start();
// �������� �� ����������� ���������� �� ���������� ������
if(isset($_SESSION["value_for_send"]))
{
	$temp=$_SESSION["value_for_send"];
	print "<form action=\"begin_session.php\" method=\"POST\">";
	print "<input type=\"text\" value=\"$temp\" size=\"40\" maxlength=\"256\" >";
	// �������� �������������� � ���������� ����������, ������� ����� ��� �� ����������
	//print "<input type=\"text\" value=\"{$_SESSION[value_for_send]}\" size=\"40\" maxlength=\"256\" >";
	print "<input type=\"submit\" value=\"Try Again\">";
	print "</form>";
	// ����������� ���������� 
	unset($_SESSION["value_for_send"]);
	session_destroy();
}
else 
{
	print "Error in recieve _SESSION";
}

?>
