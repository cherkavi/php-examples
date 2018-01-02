<?
$doc = new_xmldoc('1.0');
$root = $doc->add_root('members');
$member = $root->new_child('member','');

$member->new_child('lastName','John');
$member->new_child('firstName','Adams');
$member->new_child('contribution','3400');

$member = $root->new_child('member','');

$member->new_child('lastName','Debra');
$member->new_child('firstName','Hones');
$member->new_child('contribution','2400');

$member = $root->new_child('member','');

$member->new_child('lastName','Jake');
$member->new_child('firstName','Tudor');
$member->new_child('contribution','1200');

$fp = @fopen('members.xml','w');
if(!$fp) {
    die('Error cannot create XML file');
}
fwrite($fp,$doc->dumpmem());
fclose($fp);
?>