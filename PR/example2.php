<?
$text = "This is a simple text";
//$text = "Як помру то поховайте мене ...";
//$search = "ру";
$search = "is";
//$pos = strpos($text, $search);
$pos = strrpos($text, $search);
echo "<div>Position: $pos</div>";

$text2 = " Як помру то поховайте мене ... ";
$text2 = trim($text2);
echo "<script>alert('$text2')</script>";

$text3 = "Як помру то поховайте мене ...";
echo "<div>Length: ".strlen($text3)."</div>";
echo "<div>Length from mb_strlen: ".mb_strlen($text3)."</div>";