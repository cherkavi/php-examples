<?php
function SendUDP($IP,$PORT,$PACKET_DATA,$TIMEOUT)
{
	$UDP_socket=fsockopen('udp://'.$IP,$PORT,$errno, $errstr);// ������ �����
	if(!$UDP_socket)return "������ �������: [$errno] = $errstr"; // ��������� ����� �� ������
	fwrite($UDP_socket,$PACKET_DATA); // ���������� ������� �����
	socket_set_timeout($UDP_socket,$TIMEOUT); // ����� ������� � ��������
	$readpacket = fread($UDP_socket, 512); /* ������ 512 ���� �� ����������� ������� ������, ���� ������� �������,����-�� �� ����� ��������� � �������� �� ������ ����� - ��������� ����� �� ��������� ������*/
	fclose($UDP_socket); // ��������� ����������
	return $readpacket; // ���� ����� ������ ���������� ���������� �����
}  

?>