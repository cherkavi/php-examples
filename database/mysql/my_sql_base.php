<?
$mysql_host = "localhost";

# Пользователь, который осуществляет соединение
$mysql_user = "root";

# Пароль для доступа к MySQL базе
$mysql_password = "password";

# Соединяемся с MySQL сервером
$mysql = mysql_connect($mysql_host, $mysql_user, $mysql_password);

if ($mysql) {echo "MySQL :)";}
else {echo "MySQL :(";}

# Закрываем соединение
mysql_close($mysql);
?>

