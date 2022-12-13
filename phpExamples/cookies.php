<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";


setcookie("User_First_name", "Mayur", time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie("UserLastName", "Patange", time() + (86400 * 30), "/"); // 86400 = 1 day

?>
<html>
<body>

<?php

// get the cookies 


if(isset($_COOKIE['User_First_name'])) {
    echo "Cookie User_First_name is set!<br>";
     echo "Value is: " . $_COOKIE['User_First_name'];
     echo "Cookie UserLastName is set!<br>";
     echo "Value is: " . $_COOKIE['UserLastName'];
     echo "cookie count ".count($_COOKIE);
     
} else {
    echo "Cookie user name and last name is not set!";
}
?>

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>

</body>
</html>