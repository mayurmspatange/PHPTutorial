<?php 
if(($_SERVER["REQUEST_METHOD"] == "POST"))
{
echo("POST!!!!");
   echo($_GET["name"]);
   echo($_GET["email"]);

}
echo("data");
?>
