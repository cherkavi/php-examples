<?
$mysql_host = "localhost";

# ������������, ������� ������������ ����������
$mysql_user = "root";

# ������ ��� ������� � MySQL ����
$mysql_password = "password";

# ����������� � MySQL ��������
$mysql = mysql_connect($mysql_host, $mysql_user, $mysql_password);

if ($mysql) {echo "MySQL :)";}
else {echo "MySQL :(";}

# ��������� ����������
mysql_close($mysql);
?>

