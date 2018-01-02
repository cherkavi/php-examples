<?php
// создать новый класс
class mebel
{
//---- переменные класса
	var $mebel_color;
	var $mebel_type;
	var $mebel_panel_type;
//---- методы класса
	
	function set_color($color)
	{
		$this->mebel_color=$color;
	}
	function get_color()
	{
		return $this->mebel_color;
	}
//---- создание метода классса
	function set_type($type)	
	{
		$this->mebel_type=$type;
	}
	function get_type()
	{
		return $this->mebel_type;
	}
//---- создание метода классса
	function set_panel_type($panel_type)
	{
		$this->mebel_panel_type=$panel_type;		
	}	
	function get_panel_type()
	{
		return $this->mebel_panel_type;
	}
//----constructor
	function mebel($type,$color,$panel_type)
	{
		$this->set_type($type);
		$this->set_color($color);
		$this->set_panel_type($panel_type);
	}
}

//--- создание нового класса kitchen на базе mebel
class kitchen extends mebel 
{
//--- constructor
	function kitchen($type,$color,$panel_type)
	{
		// обязательное обращение к конструктору родителя, который не вызывается автоматически
		$this->mebel($type,$color,$panel_type);
	}
// класс kitchen получил все свойства и методы класса mebel	
}
//$my_kitchen=new mebel("My_type","RED","My_Panel");
$my_kitchen=new kitchen("My_type","RED","My_Panel");
print $my_kitchen->get_color();
?>
