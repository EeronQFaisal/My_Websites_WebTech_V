<?php
echo "Hello, ", "World!<br>";
print "Hello World!<br>";
?>

<?php
$x = 10;
$y = 10.5;
$z = "Hello";
$isTrue = true;

var_dump($x);
echo "<br>";
?>

<?php
//indexed array
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[1];//output BMW
echo "<br>";
?>

<?php
//associative array
$cars2 = array(
    "brand" => "Ford",
    "model" => "Mustang",
    "year" => 1964
);
echo $cars2["model"];//output Mustang
echo "<br>";
?>

<?php
//if-else
$a = 20;
$b = 30;

if($a > $b){
    echo "A is greater";
}elseif($a == $b){
    echo "Equal";
}
else{
    echo "B is greater";
}
echo "<br>";
?>

<?php
//switch
$color = "red";
switch($color){
    case "red":
        echo "Red selected";
        break;
    default:
        echo "Other color";
}
echo "<br>";
?>

<?php
//while loop
$i = 1;
while($i <= 5){
    echo $i;
    $i++;
}
echo "<br>"
?>

<?php
//do-while
$i = 1;
do {
    echo $i;
    $i++;
}while($i <= 5);
?>

<?php
//foreach
echo "<br>";
$colors = array("red", "green", "blue");
foreach($colors as $value){
    echo $value;
    echo ", ";
}
?>


