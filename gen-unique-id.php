<?php
// вывод предупреждений, если они были отключены
//ini_set("display_errors","1");
//ini_set("error_reporting",E_ALL);// E_ERROR - вывод только ошибок,
?>
<html>

<head>
  <title></title>
</head>

<body>

<?php

// создание уникального идентификатора длинной 23 символа c преамбулой
print uniqid('>>>',true);print "<br>";
// создание уникального идентификатора длинной 13 символов с преамбулой
print uniqid('___');print "<br>";
// добавление к уникальному идентификатору случайного числа
	// запуск генератора случайных чисел
srand(microtime()*1000000);
	// генерируем случайное число
$preambule=rand();

print uniqid($preambule);
$_SERVER["SOURCE_CHARSET"]="win1251";
phpinfo();
?>

</body>

</html>