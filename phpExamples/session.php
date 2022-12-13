<?php


// Start the session
session_start();


?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables


$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";

echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";


print_r($_SESSION);

$_SESSION["favcolor"] = "RED";

print_r($_SESSION);



// remove all session variables
session_unset();

// destroy the session
session_destroy();

print_r($_SESSION);

?>

</body>
</html>