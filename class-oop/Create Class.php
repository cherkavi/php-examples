<html>

<head>
  <title></title>
</head>

<body>

<?php
// �������� ������ ������
class Class_temp
      {      // ���������� ���������� ������� ������
      var $value1;
      var $value2;
      // ����������� ������ - ����� ���������� ��� � ������ ������, ���������� ������������� ���
      function Class_temp($init_value1,$init_value2)
			   {			   $this->value1=$init_value1;
			   $this->value2=$init_value2;			   }
      function set_value1($value)
               {               $this->value1=$value;               }
      function set_value2($value)
               {               $this->value2=$value;               }
      function get_value1()
               {               return $this->value1;               }
      function get_value2()
      	       {      	       return $this->value2;      	       }      }
$my_class=new Class_temp(1,2);
print $my_class->get_value1();
print "<br>";
print $my_class->get_value2();
print "<br>";
$my_class->set_value1(10);
$my_class->set_value2(20);
print $my_class->get_value1();
print "<br>";
print $my_class->get_value2();
print "<br>";

?>

</body>

</html>