<?php

function formatString(string $inputString): string {
    $string = str_replace(' ', '', $inputString);
    return strtolower($string);
}

function checkEvenOrOdd(int $number): string {
    return ($number % 2 === 0) ? "The number $number is even." : "The number $number is odd.";
}

$originalString = "This is a poorly written program with little structure and readability.";
$formattedString = formatString($originalString);
echo "Modified string: " . $formattedString . PHP_EOL;

$number = 42;
echo checkEvenOrOdd($number) . PHP_EOL;

?>
