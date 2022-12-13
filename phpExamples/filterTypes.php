<?php

//function to remove all HTML tags from a string:
$str = "<h1>Hello World!</h1>";
echo($str);
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo "After Filter: ".$newstr;


echo("</br>");
$Age = 0;

if (filter_var($Age, FILTER_VALIDATE_INT)) {
  echo("age is Integer");
} else {
  echo("age is  not an Integer.");
}


$ip = "127.0.255.u";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  echo("$ip is a valid IP address");
} else {
  echo("$ip is not a valid IP address");
}




$email = "john./////doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);


echo("</br>");
echo $email;

echo("</br>");
// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}



$url = "https://w3schools.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo("$url is a valid URL");
} else {
  echo("$url is not a valid URL");
}



?>