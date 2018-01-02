<html>

<head>
  <title></title>
</head>

<body>

<?php
echo "this is a file temp5-php<br>";

$variable="memo1";
$$variable=$_GET[$variable];
if($$variable!=null)print "Memo1: ${$variable}<br>";

$variable="combobox1";
$$variable=$_GET[$variable];
if($$variable!=null)print "Combobox1: ${$variable}<br>";


$variable="checkbox1";
// обязательная проверка на установку, иначе - ошибка
if(isset($_GET[$variable]))
   {
    $$variable=$_GET[$variable];
    print "Checkbox1: ${$variable}<br>";
    }

$variable="checkbox2";
// обязательная проверка на установку, иначе - ошибка
if(isset($_GET[$variable]))
   {
    $$variable=$_GET[$variable];
    print "Checkbox2: ${$variable}<br>";
    }

$variable="radio1";
// обязательная проверка на установку, иначе - ошибка
if(isset($_GET[$variable]))
   {
    $$variable=$_GET[$variable];
    print "$variable: ${$variable}<br>";
    }


$variable="button1";
$$variable=$_GET[$variable];
print "$variable: ${$variable}<br>";

?>

</body>

</html>