<?php 

include 'welcome2.php';

if(($_SERVER["REQUEST_METHOD"] == "GET"))
{
    echo("data!!!!");
   echo($_GET["name"]);

}


?>