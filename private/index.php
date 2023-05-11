<?php

// Oefening 1
// Maak een array met 5 verschillende STRING elementen
$arrayString = ["element1", "element2", "element3", "element4", "element5"];

// Maak een array met 5 verschillende INTEGER elementen
$arrayInteger = [1, 2, 3, 4, 5];

// Maak een array met 5 verschillende elementen waarin je INTEGER, STRING mixed
$arrayMixed = [1, "element2", 3, "element4", 5];

// Maak een array met 5 verschillende STRING elementen waarin je ook een lege string opneemt
$arrayStringWithEmpty = ["element1", "element2", "", "element4", "element5"];


// Oefening 2
// Lees de arrays uit met een for loop en print de uitvoer naar het scherm
for ($i = 0; $i < count($arrayString); $i++) {
    echo "Element " . ($i + 1) . " in arrayString: " . $arrayString[$i] . "<br>";
}

for ($i = 0; $i < count($arrayInteger); $i++) {
    echo "Element " . ($i + 1) . " in arrayInteger: " . $arrayInteger[$i] . "<br>";
}

for ($i = 0; $i < count($arrayMixed); $i++) {
    echo "Element " . ($i + 1) . " in arrayMixed: " . $arrayMixed[$i] . "<br>";
}

for ($i = 0; $i < count($arrayStringWithEmpty); $i++) {
    echo "Element " . ($i + 1) . " in arrayStringWithEmpty: " . $arrayStringWithEmpty[$i] . "<br>";
}


// Vraag het type van elk element op en print de uitvoer naar het scherm
for ($i = 0; $i < count($arrayString); $i++) {
    echo "Type van element " . ($i + 1) . " in arrayString: " . gettype($arrayString[$i]) . "<br>";
}

for ($i = 0; $i < count($arrayInteger); $i++) {
    echo "Type van element " . ($i + 1) . " in arrayInteger: " . gettype($arrayInteger[$i]) . "<br>";
}

for ($i = 0; $i < count($arrayMixed); $i++) {
    echo "Type van element " . ($i + 1) . " in arrayMixed: " . gettype($arrayMixed[$i]) . "<br>";
}

for ($i = 0; $i < count($arrayStringWithEmpty); $i++) {
    echo "Type van element " . ($i + 1) . " in arrayStringWithEmpty: " . gettype($arrayStringWithEmpty[$i]) . "<br>";
}

?>