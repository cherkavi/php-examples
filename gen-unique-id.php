<?php
// ����� ��������������, ���� ��� ���� ���������
//ini_set("display_errors","1");
//ini_set("error_reporting",E_ALL);// E_ERROR - ����� ������ ������,
?>
<html>

<head>
  <title></title>
</head>

<body>

<?php

// �������� ����������� �������������� ������� 23 ������� c ����������
print uniqid('>>>',true);print "<br>";
// �������� ����������� �������������� ������� 13 �������� � ����������
print uniqid('___');print "<br>";
// ���������� � ����������� �������������� ���������� �����
	// ������ ���������� ��������� �����
srand(microtime()*1000000);
	// ���������� ��������� �����
$preambule=rand();

print uniqid($preambule);
$_SERVER["SOURCE_CHARSET"]="win1251";
phpinfo();
?>

</body>

</html>