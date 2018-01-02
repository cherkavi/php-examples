<?php
if(isset($_REQUEST["clear_data"])){
	unset($_COOKIE["bg_color"]);
	unset($_COOKIE["font_color"]);
	$bg_color="white";
	$font_color="black";
}
if(isset($_REQUEST["bg_color"])){
	$_COOKIE["bg_color"]=$_REQUEST["bg_color"];
};
if(isset($_REQUEST["font_color"])){
	$_COOKIE["font_color"]=$_REQUEST["font_color"];
};

if(isset($_COOKIE["bg_color"])){
	$bg_color=$_COOKIE["bg_color"];
}
else{
	$bg_color="white";
};
if(isset($_COOKIE["font_color"])){
	$font_color=$_COOKIE["font_color"];
}
else{
	$font_color="black";
}
?>
<body <?php print "bgcolor=\"$bg_color\" text=\"$font_color\"" ?>>
Выберите цвет фона<br>
<form action="cookie_1.php" method="post">
<select name="bg_color">
	<option value="red"    <?php if($bg_color=="red"){print "selected";};?>> красный</option>
	<option value="white"    <?php if($bg_color=="white"){print "selected";};?>> белый</option>
	<option value="green"  <?php if($bg_color=="green"){print "selected";};?>> зеленый</option>
	<option value="yellow" <?php if($bg_color=="yellow"){print "selected";};?> > желтый</option>
	<option value="blue"   <?php if($bg_color=="blue"){print "selected";};?>> голубой</option>
	<option value="black"  <?php if($bg_color=="black"){print "selected";};?>> черный</option>
</select><br>
<br>
Выберите цвет шрифта<br>
<select name="font_color">
	<option value="red"   <?php if($font_color=="red"){print "selected";};?> > красный</option>
	<option value="white"    <?php if($font_color=="white"){print "selected";};?>> белый</option>
    <option value="green" <?php if($font_color=="green"){print "selected";};?> > зеленый</option>
	<option value="yellow" <?php if($font_color=="yellow"){print "selected";};?>> желтый</option>
	<option value="blue"   <?php if($font_color=="blue"){print "selected";};?>> голубой</option>
	<option value="black"  <?php if($font_color=="black"){print "selected";};?>> черный</option>
</select>
<br>
<button type="submit" > Установить цвета </button>
</form>
<br>
<form action="cookie_1.php" method="post">
<input type="hidden" name="clear_data" size="40" maxlength="256">
<button type="submit" > Удалить цвета </button>
</form>

</body>
