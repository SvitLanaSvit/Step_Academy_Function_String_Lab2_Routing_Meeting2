<?
if(require ("functions.php")){
//include ("functions.php");
//include_once ("functions.php");

$n1 = 100;
$n2 = 40;
$sum = AddTwoNumbers($n1, $n2, "cadetblue");
AddTwoNumbers(200, 30, "red");
AddTwoNumbers(170, 30);
echo "<div>$n1 + $n2 = ".$sum."</div>";

incValueRed($n1);
echo "<div>num after function: $n1</div>";

$title = "Fishing!";

colorCaption("red");

getCounter();
getCounter();
getCounter();
}
else{
    echo "No such file in directory.";
}