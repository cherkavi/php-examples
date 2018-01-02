<?php
function SendUDP($IP,$PORT,$PACKET_DATA,$TIMEOUT)
{
	$UDP_socket=fsockopen('udp://'.$IP,$PORT,$errno, $errstr);// создаём сокет
	if(!$UDP_socket)return "Ошибка запроса: [$errno] = $errstr"; // проверяем сокет на ошибки
	fwrite($UDP_socket,$PACKET_DATA); // отправляем серверу пакет
	socket_set_timeout($UDP_socket,$TIMEOUT); // задаём таймаут в секундах
	$readpacket = fread($UDP_socket, 512); /* читаем 512 байт из присланного сервера пакета, если таковой имеется,если-же за время указанное в таймауте не пришёл ответ - закрываем сокет не дожидаясь ответа*/
	fclose($UDP_socket); // закрываем соединение
	return $readpacket; // Если пакет пришёл возвращаем полученный пакет
}  

?>