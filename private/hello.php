<?php


$varNaam = "Joost";
$varNaam2 = " van der Laan"; 

print "</br>";
print $varNaam . " " . $varNaam2;
print "</br>";

$getal = 3;
$getal2 = 5;
$getal3 = 10;

print$getal;
print "</br>";

print "{$getal} + {$getal2}= " . 
$getal + $getal2;

print "</br>";
print "{$getal} * {$getal2}= " . 
$getal * $getal2;



print "</br>";
print "{$getal3} / {$getal2}= " . 
$getal3 / $getal2;


print "</br>";
print "{$getal3} ** {$getal2}= " . 
$getal3 ** $getal2;

print "</br>";
print "{$getal3} % {$getal2}= " . 
$getal3 % $getal2;


print "</br>";
$x = 100;  
$y = "100";

var_dump($x == $y);


print "</br>";
$x = 100;  
$y = "100";

var_dump($x === $y);

$x = 100;  
$y = "100";

var_dump($x != $y);


$x = 100;  
$y = "100";

var_dump($x <> $y);

$x = 100;  
$y = "100";

var_dump($x !== $y);

$x = 10;
$y = 50;

var_dump($x < $y);

$x = 50;
$y = 50;

var_dump($x >= $y);

$x = 50;
$y = 50;

var_dump($x <= $y);


$x = 5;  
$y = 10;

print ($x <=> $y);
print "<br>";

$x = 10;  
$y = 10;

print ($x <=> $y); 
print "<br>";

$x = 15;  
$y = 10;

print ($x <=> $y);


print "</br>";
$test1 = "hoi";
$test2 = "doei";
?>

<html>
<head>
</head>
<body>
            <?php
            print $test1 . " " . $test2;       
            ?>
</body>
</html>