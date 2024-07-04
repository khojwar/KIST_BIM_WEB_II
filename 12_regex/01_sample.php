<?php

// pattern
$pattern = '/tika/';

// string
$string = 'My name is tika.';

if (preg_match($pattern, $string)) {
    echo 'Match found!';
} else {
    echo 'Match not found!';
}




// pattern for email
$pattern = '/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/';

// string
$string = 'My email is khojwartikaram@gmail.com.';
if (preg_match($pattern, $string)) {
    echo 'Match found!';
} else {
    echo 'Match not found!';
}

// pattern for phone number (Nepal) 
$pattern = '/^(\+977)?[0-9]{10}$/';

// string
$string = 'My phone number is 9841234567.';
if (preg_match($pattern, $string)) {
    echo 'Match found!';
} else {
    echo 'Match not found!';
}


// pattern for date (YYYY-MM-DD)
$pattern = '/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/';

// string
$string = 'My date of birth is 1990-01-01.';
if (preg_match($pattern, $string)) {
    echo 'Match found!';
} else {
    echo 'Match not found!';
}

// pattern for date (DD/MM/YYYY)
$pattern = '/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/';

// string
$string = 'My date of birth is 01/01/1990.';
if (preg_match($pattern, $string)) {
    echo 'Match found!';
} else {
    echo 'Match not found!';
}

// pattern for password (at least 8 characters, 1 uppercase, 1 lowercase, 1 number, 1 special character)
$pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';

// string
$string = 'My password is Tika@123.';
if (preg_match($pattern, $string)) {
    echo 'Match found!';
} else {
    echo 'Match not found!';
}

// pattern for URL
$pattern = '/^(https?:\/\/)?(www\.)?[a-z0-9]+\.[a-z]{2,}(\.[a-z]{2,})?$/';

// string
$string = 'My website is https://www.tika.com.';
if (preg_match($pattern, $string)) {
    echo 'Match found!';
} else {
    echo 'Match not found!';
}

// pattern for IP address
$pattern = '/^([0-9]{1,3}\.){3}[0-9]{1,3}$/';

// string ip address should be random
$string = 'My IP address is 192.168.1.1.';
if (preg_match($pattern, $string)) {
    echo 'Match found!';
} else {
    echo 'Match not found!';
}

// pattern for HTML tag
$pattern = '/^<([a-z]+)([^<]+)*(?:>(.*)<\/\1>|\s+\/>)$/';

// string
$string = '<h1>Heading</h1>';
if (preg_match($pattern, $string)) {
    echo 'Match found!';
} else {
    echo 'Match not found!';
}

// pattern for HTML comment
$pattern = '/<!--(.*?)-->/';

// string
$string = '<!-- This is a comment -->';
if (preg_match($pattern, $string)) {
    echo 'Match found!';
} else {
    echo 'Match not found!';
}

// pattern for HTML tag with attributes
$pattern = '/^<([a-z]+)([^<]+)*(?:>(.*)<\/\1>|\s+\/>)$/';

// string
$string = '<a href="https://www.tika.com">Tika</a>';
if (preg_match($pattern, $string)) {
    echo 'Match found!';
} else {
    echo 'Match not found!';
}










?>