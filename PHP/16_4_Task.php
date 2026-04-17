<?php
function find_max($num1, $num2){
    if($num1 > $num2){
        return $num1;
    }
    else{
        return $num2;
    }
};

$marks = [70, 80, 90, 75, 85];

//display
echo "Marks: <br>";
foreach($marks as $value){
    echo $value;
    echo "<br>";
}

//total marks
$total = 0;
for($i = 0; $i < 5; $i++){
    $total += $marks[$i];
}
echo "Total marks: ";
echo $total;
echo "<br>";

//average
$average = $total / 5;
echo "Average: ";
echo $average;
echo "<br>";

//maximum
$max = 0;
for($i = 0; $i < 5; $i++){
    $max = find_max($marks[$i], $max);
}
echo "Maximum: ";
echo $max;
echo "<br>";

//minimum
$min = $max;
for($i = 0; $i < 5; $i++){
    if($marks[$i] < $min){
        $min = $marks[$i];
    }
}
echo "Minimum: ";
echo $min;
echo "<br>";

//no. of passed students
$passed = 0;
for($i = 0; $i < 5; $i++){
    if($marks[$i] >= 50){
        $passed++;
    }
}
echo "Passed: ";
echo $passed;
echo "<br>";

//Associative array part

$student = [
    "name" => "Asif",
    "id" => "CSE123",
    "cgpa" => 3.75
];

foreach($student as $value){
    echo $value;
    echo "<br>";
}


?>