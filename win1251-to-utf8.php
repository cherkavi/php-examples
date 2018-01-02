<html>

<head>
  <title></title>
</head>

<body>

<?php

function decode_rus($line)
{$line=str_replace("Ї","&#1031",$line);
$line=str_replace("А","&#1040",$line);
$line=str_replace("Б","&#1041",$line);
$line=str_replace("В","&#1042",$line);
$line=str_replace("Г","&#1043",$line);
$line=str_replace("Д","&#1044",$line);
$line=str_replace("Е","&#1045",$line);
$line=str_replace("Ж","&#1046",$line);
$line=str_replace("З","&#1047",$line);
$line=str_replace("И","&#1048",$line);
$line=str_replace("Й","&#1049",$line);
$line=str_replace("К","&#1050",$line);
$line=str_replace("Л","&#1051",$line);
$line=str_replace("М","&#1052",$line);
$line=str_replace("Н","&#1053",$line);
$line=str_replace("О","&#1054",$line);
$line=str_replace("П","&#1055",$line);
$line=str_replace("Р","&#1056",$line);
$line=str_replace("С","&#1057",$line);
$line=str_replace("Т","&#1058",$line);
$line=str_replace("У","&#1059",$line);
$line=str_replace("Ф","&#1060",$line);
$line=str_replace("Х","&#1061",$line);
$line=str_replace("Ц","&#1062",$line);
$line=str_replace("Ч","&#1063",$line);
$line=str_replace("Ш","&#1064",$line);
$line=str_replace("Щ","&#1065",$line);
$line=str_replace("Ъ","&#1066",$line);
$line=str_replace("Ы","&#1067",$line);
$line=str_replace("Ь","&#1068",$line);
$line=str_replace("Э","&#1069",$line);
$line=str_replace("Ю","&#1070",$line);
$line=str_replace("Я","&#1071",$line);
$line=str_replace("а","&#1072",$line);
$line=str_replace("б","&#1073",$line);
$line=str_replace("в","&#1074",$line);
$line=str_replace("г","&#1075",$line);
$line=str_replace("д","&#1076",$line);
$line=str_replace("е","&#1077",$line);
$line=str_replace("ж","&#1078",$line);
$line=str_replace("з","&#1079",$line);
$line=str_replace("и","&#1080",$line);
$line=str_replace("й","&#1081",$line);
$line=str_replace("к","&#1082",$line);
$line=str_replace("л","&#1083",$line);
$line=str_replace("м","&#1084",$line);
$line=str_replace("н","&#1085",$line);
$line=str_replace("о","&#1086",$line);
$line=str_replace("п","&#1087",$line);
$line=str_replace("р","&#1088",$line);
$line=str_replace("с","&#1089",$line);
$line=str_replace("т","&#1090",$line);
$line=str_replace("у","&#1091",$line);
$line=str_replace("ф","&#1092",$line);
$line=str_replace("х","&#1093",$line);
$line=str_replace("ц","&#1094",$line);
$line=str_replace("ч","&#1095",$line);
$line=str_replace("ш","&#1096",$line);
$line=str_replace("щ","&#1097",$line);
$line=str_replace("ъ","&#1098",$line);
$line=str_replace("ы","&#1099",$line);
$line=str_replace("ь","&#1100",$line);
$line=str_replace("э","&#1101",$line);
$line=str_replace("ю","&#1102",$line);
$line=str_replace("я","&#1103",$line);
$line=str_replace("ё","&#1105",$line);
$line=str_replace("є","&#1108",$line);
$line=str_replace("і","&#1110",$line);
$line=str_replace("ї","&#1111",$line);
return $line;}

$line="привет, я даже не скучаю";
echo decode_rus("привет, я даже не скучаю");
echo decode_rus($line);

?>

</body>

</html>