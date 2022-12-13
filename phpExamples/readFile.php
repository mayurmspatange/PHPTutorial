<?php 

// echo(readfile('dummy.text'))



$myfile = fopen("dummy.txt", "r") or die("Unable to open file!");


// echo fread($myfile,filesize("dummy.txt"));


echo("read a file  single line </br>");



// echo(fgets($myfile));


echo("read a file line by line</br>");

while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}



echo("read a char by char /br>");

// while(!feof($myfile)) {
//     echo fgetc($myfile) . "<br>";
// }


fclose($myfile);



?>