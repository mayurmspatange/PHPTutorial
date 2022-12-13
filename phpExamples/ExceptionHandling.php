<!-- try 
    -- error producing code.
   -- file -- error fileNotFound 
    --database --- connection error  
    dataase close 

catch
    -- handle error/exceptions file / databsae / error produce code 

finally

-- file close 
-- database connection close -->


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class numberException extends Exception {
        function getErrorMessage(){
        return "this is custome exception class".$this->getMessage();
        }

}


try {
    $div1 = 10;
    $div2 = -1;


    if ($div2 === 0) {
        throw new Exception("divide by zero", 101, new Exception("old exceptions"));
    }
    echo ("data");
    if ($div2 < 0) {
        throw new numberException(" number is negative");
    }

    echo "divide exaple: " . ($div1 / $div2);
    // return $res;
}catch(numberException $ex){
    echo $ex->getErrorMessage();
}catch (Exception $e) {
    echo "</br>exceptions: ";
    echo "</br>Exception handling programs: "
        . $e->getMessage() . "code is :" . $e->getCode() . " in file "
        . $e->getFile() . " at line number :" . $e->getLine() . " getPrevious :" . ($e->getPrevious())->getMessage();
}finally {
    echo "</br>Finally Block executed...";
}





?>