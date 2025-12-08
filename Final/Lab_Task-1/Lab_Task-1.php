
<?php
$Numbers = array(40,50,60,70,80,90);
$sum = 0;
foreach ($Numbers as $value) {
    $sum += $value;
}
$average = $sum / count($Numbers);
echo "The average is: " . $average . "<br>";

if ($average > 60) {
    echo "The status is low.<br>";
} else if($average == 60) {
    echo "The status depends now <br>";
}
else {
    echo "The status is Legend.<br>";
}

function drop($number) {
    if ($number <60) {
        return "Drop please !";
    } else {
        return "Will suffer in final term.";
    }
}

foreach ($Numbers as $num) {
    echo "For number $num: " . drop($num) . "<br>";
}

?>