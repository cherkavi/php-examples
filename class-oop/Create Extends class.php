<?php
// ������� ����� �����
class mebel
{
//---- ���������� ������
	var $mebel_color;
	var $mebel_type;
	var $mebel_panel_type;
//---- ������ ������
	
	function set_color($color)
	{
		$this->mebel_color=$color;
	}
	function get_color()
	{
		return $this->mebel_color;
	}
//---- �������� ������ �������
	function set_type($type)	
	{
		$this->mebel_type=$type;
	}
	function get_type()
	{
		return $this->mebel_type;
	}
//---- �������� ������ �������
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

//--- �������� ������ ������ kitchen �� ���� mebel
class kitchen extends mebel 
{
//--- constructor
	function kitchen($type,$color,$panel_type)
	{
		// ������������ ��������� � ������������ ��������, ������� �� ���������� �������������
		$this->mebel($type,$color,$panel_type);
	}
// ����� kitchen ������� ��� �������� � ������ ������ mebel	
}
//$my_kitchen=new mebel("My_type","RED","My_Panel");
$my_kitchen=new kitchen("My_type","RED","My_Panel");
print $my_kitchen->get_color();
?>
