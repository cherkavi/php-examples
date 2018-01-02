<?php


//create an XML document
$doc = domxml_new_doc("1.0");
$root = $doc->add_root("HTML ");
$head = $root->new_child("HEAD", "");
$head->set_attribute("Language","english");
$head->set_attribute("Region","USA");
$head->set_attribute("Region","free");
$title = $head->new_child("TITLE", "Hello World");
$root->new_child("BODY","This is the body");

print $doc->dump_mem(false);
?>