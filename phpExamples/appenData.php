<?php

    $myfile = fopen("newfile.txt", "a");   //apppend to end
    $txt = "AAAAA\n";


    fwrite($myfile, $txt);


    $txt = "AAAAA\n";


    fwrite($myfile, $txt);
    
    fclose($myfile);
?>
