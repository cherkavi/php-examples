<html>

<head>
  <title></title>
</head>

<body>

<?php

function decode_rus($line)
{$line=str_replace("�","&#1031",$line);
$line=str_replace("�","&#1040",$line);
$line=str_replace("�","&#1041",$line);
$line=str_replace("�","&#1042",$line);
$line=str_replace("�","&#1043",$line);
$line=str_replace("�","&#1044",$line);
$line=str_replace("�","&#1045",$line);
$line=str_replace("�","&#1046",$line);
$line=str_replace("�","&#1047",$line);
$line=str_replace("�","&#1048",$line);
$line=str_replace("�","&#1049",$line);
$line=str_replace("�","&#1050",$line);
$line=str_replace("�","&#1051",$line);
$line=str_replace("�","&#1052",$line);
$line=str_replace("�","&#1053",$line);
$line=str_replace("�","&#1054",$line);
$line=str_replace("�","&#1055",$line);
$line=str_replace("�","&#1056",$line);
$line=str_replace("�","&#1057",$line);
$line=str_replace("�","&#1058",$line);
$line=str_replace("�","&#1059",$line);
$line=str_replace("�","&#1060",$line);
$line=str_replace("�","&#1061",$line);
$line=str_replace("�","&#1062",$line);
$line=str_replace("�","&#1063",$line);
$line=str_replace("�","&#1064",$line);
$line=str_replace("�","&#1065",$line);
$line=str_replace("�","&#1066",$line);
$line=str_replace("�","&#1067",$line);
$line=str_replace("�","&#1068",$line);
$line=str_replace("�","&#1069",$line);
$line=str_replace("�","&#1070",$line);
$line=str_replace("�","&#1071",$line);
$line=str_replace("�","&#1072",$line);
$line=str_replace("�","&#1073",$line);
$line=str_replace("�","&#1074",$line);
$line=str_replace("�","&#1075",$line);
$line=str_replace("�","&#1076",$line);
$line=str_replace("�","&#1077",$line);
$line=str_replace("�","&#1078",$line);
$line=str_replace("�","&#1079",$line);
$line=str_replace("�","&#1080",$line);
$line=str_replace("�","&#1081",$line);
$line=str_replace("�","&#1082",$line);
$line=str_replace("�","&#1083",$line);
$line=str_replace("�","&#1084",$line);
$line=str_replace("�","&#1085",$line);
$line=str_replace("�","&#1086",$line);
$line=str_replace("�","&#1087",$line);
$line=str_replace("�","&#1088",$line);
$line=str_replace("�","&#1089",$line);
$line=str_replace("�","&#1090",$line);
$line=str_replace("�","&#1091",$line);
$line=str_replace("�","&#1092",$line);
$line=str_replace("�","&#1093",$line);
$line=str_replace("�","&#1094",$line);
$line=str_replace("�","&#1095",$line);
$line=str_replace("�","&#1096",$line);
$line=str_replace("�","&#1097",$line);
$line=str_replace("�","&#1098",$line);
$line=str_replace("�","&#1099",$line);
$line=str_replace("�","&#1100",$line);
$line=str_replace("�","&#1101",$line);
$line=str_replace("�","&#1102",$line);
$line=str_replace("�","&#1103",$line);
$line=str_replace("�","&#1105",$line);
$line=str_replace("�","&#1108",$line);
$line=str_replace("�","&#1110",$line);
$line=str_replace("�","&#1111",$line);
return $line;}

$line="������, � ���� �� ������";
echo decode_rus("������, � ���� �� ������");
echo decode_rus($line);

?>

</body>

</html>