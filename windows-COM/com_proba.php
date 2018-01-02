<?php
// открытие объекта COM Word.Application
$word=new COM("word.application") or die("Couldn't start Word!");
$word->visible=1;
$word->documents->add();
$word->selection->typetext("hello from PHP");
//$word->Application->DefaultSaveFormat="Text";
//$word->activedocuments->save;
//$word->quit();

$excel=new COM("excel.application") or die("Couldn't start Excel!");
$excel->visible=1;
$excel->workbooks->add();
$excel->cells->item(1,1)->value="hello from PHP";

?>