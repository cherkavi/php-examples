<?php
// �������� ������
session_start();
$value_for_send="hello from preview page";
// �������� ���������� ����������
$_SESSION["value_for_send"]=$value_for_send;
print "<a href=\"get_session.php\"> hello </a>";
?>