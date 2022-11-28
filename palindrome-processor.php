<?php  

if(isset($_POST['submit'])) {

$palindrome = $_POST['palindrome'];
$palindromeReversed = strrev($palindrome);

    if($palindrome == $palindromeReversed) {

        echo "$palindrome is a palindrome";

    } else {

        echo "$palindrome is not a palindrome";
    }
} 

