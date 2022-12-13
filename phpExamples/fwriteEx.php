<?php

    $myfile = fopen("newfile.txt", "w");
    $txt = "afdsddddddddddddddddddddd";


    fwrite($myfile, $txt);


    $txt = "ddddddddddddddddddddd";

    fwrite($myfile, $txt);
    
    fclose($myfile);
?>