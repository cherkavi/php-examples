<html>
<?
# ���� ������������� ����������
// �������� ������
class new_object
      {
      var $object_color;
      var $object_form;
      function get_color()
               {
               return ($this->object_color);
               }
      function set_color($i)
              {
               $this->object_color=$i;
               }
      }
// �������� ������ ������ �� ������ ��� ���������� � ���������� � ���� �������������� �������
class new_object_child extends new_object
      {
      function get_color_color()
               {
                return $this->object_color.$this->object_color;
                }
      }
// ������ ����������� ����� ���������� ������� ������������ � �������
function variable_params()
         {
         print "<br>amount parametrs: ".func_num_args();
         for($i=1;$i<=func_num_args();$i++)
            {
             print "<br> $i = ".func_get_arg($i-1);
             }
          }
// ���������� ��������, ������ ������� ������� ����
$object1=new new_object;
$object2=new new_object_child;
// ���������� ����������
// � ���������� �������
$a=11;
// � �����������������
$b=0x20;
// � ������������
$c=020;
// ��������� ����������
$color="RED";
$color_text="Yellow";

// ������� ������� �������� �������
$array[0]=$color;// $array[]=$color;
// ������� ������� �������� �������
$array[1]="MAGENTA&&BLUE";// $array[]="MAGENTA&&BLUE";
// ������� �������������� (���-�������)
$hash["one"]=1;
$hash["two"]=2;
$hash["three"]=3;
$hash["four"]=4;

$color="BLUE";

$x="57.2hello";
$y=2;
$z=($x+$y);
//$z=int($x+$y);
//$z=float($x+$y);

print "$z<br> ";
function add_values($val1,$val2)
         {
         print "value1:=$val1<br>";
         print "value2:=$val2<br>";
         print ($val1/$val2);
         }


// ���������� �������, � ������� ���������� STATIC ����������� ������ ���� ��� � �� �������� ����������� ��� ����������� ���������
// global - ��������� � ���������� ���������� (������� ������� ����, ��� ���� �������)
function output_text_tag($text_for_output)
{
static $value1=10;
global $a;
$a=$a+2;
$value1+=2;
print "<b color=$color><i>$text_for_output</i>  $value1</b>";
print "<br> path:  $HTTP_USER_AGENT<br>"."<BR HREF=RED>HELLO<BR>";
}

?>

<head>
<title>
<?
echo "hello this is my page, background color in this page is "+$color;

?>
</title>
</head>

<body <?

        if($a>=10){
                   #print "bgcolor=$color";
                   // ������ � ���� HTML-���� ��� ������ � ���������� ��� �������� �����
                   print "bgcolor=$array[1]";
                   };
      ?>
>

<?

echo "hello my friend $a  $color ";
print (date("Y,M,d"));
output_text_tag("hello");
?>

<?
output_text_tag("<br>hello from function<br>");
add_values($a,$b);
print "<br>";
print "<br>";
$s1='one';
$s2='two';
$s='hash';
print ${$s}[$s1]+$hash[$s2];

$array[0]++;
$array[0]++;
$array[0]++;

print "<br>       $array[0]";
$a="hel";
$b="lo";
print "<br>".$a.=$b;
if(file_exists('c:\one.txt'))
    {
    /*$f=fopen('c:\one.txt','r');
    while(!feof($f))
         {
         $s=fgets($f,4096);
         printf(" file: %s<br>",$s);
         }*/
    print "file c:\one.txt exists";
     }
else print "file not found c:\one.txt";
for($a=1,print "   begin:";print "$a",$a<=10;$a++)
    {
     if($a==5){
               continue;
               };
     print "<$a>";
     };
print "<br>";
foreach($hash as $i=>$i2)
        {
        if($i2==3)break;
        print "  ".$i.'=>'.$i2."<br>";
        }
$array_one[]="one";
$array_one[]="two";
if(in_array('three',$array_one))
  {
  printf("Element one find");
  }
else printf('Element three not found');
$hash=array("USA"=>"Big country","Australia"=>"Middle Country","USSR"=>"Dead Country");

$hash_key=array_keys($hash);
$hash_values=array_values($hash);

foreach($hash_values as $i)
       {
       print "<br>".$i."    >>";
        }
for($i=0;$i<count($array_one);$i++)
    {
     print "<br>>>>".$array_one[$i];
     }
$object1->set_color("yellow and red");
$object2->set_color("blue and green");
print "<br>".$object1->get_color();
print "<br>".$object2->get_color_color();
variable_params("one","two","three");
?>
</body>

</html>
