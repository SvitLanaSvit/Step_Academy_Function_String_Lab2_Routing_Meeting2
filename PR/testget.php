<?
$name = $_GET["name"];
$age = $_GET["age"];
$isAdmin = isset($_GET["admin"]) ? "Admin" : "User";

// echo "<h2>Name: $name</h2>";
// echo "<div>Age: $age years old</div>";
// echo "<div style='color: cadetblue'>".$isAdmin."</div>";
foreach($_GET as $k=>$v){
    echo "<div>$k => $v </div>";
}