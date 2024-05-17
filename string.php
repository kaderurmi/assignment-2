<?php
$strings = ["Hello", "World", "PHP", "Programming"];
// Function to Vowels Check in a string
function vowelsCheck($str) {
    $vowelsAre = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $vowelCount = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowelsAre)) {
            $vowelCount++;
        }
    }
    return $vowelCount;
}
// Process each string in the array
foreach ($strings as $string) {
    $vowelsCheck = vowelsCheck($string);
    $string_reversed = strrev($string);    
    echo "Original String: $string, Vowel Count: $vowelsCheck, Reversed String: $string_reversed\n";
}