<?
function AddTwoNumbers($num1, $num2, $color = "blue"){
    echo "<div style='color:$color'>".$num1 + $num2."</div>";
    return $num1 + $num2;
}

function incValue($num){
    $num += 10;
    echo "<div>num inside function: $num</div>";
}

function incValueRed(&$num){
    $num += 10;
    echo "<div>num inside function: $num</div>";
}

function colorCaption($color){
    global $title;
    echo "<h2 style='color: $color;'>".$title."</h2>";
}

function getCounter(){
    static $count = 0;
    $count ++;
    echo "<div>$count</div>";
    return $count;
}