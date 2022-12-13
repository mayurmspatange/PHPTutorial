<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

$jsonEncode = json_encode($age);

echo $jsonEncode;

echo "</br>";


echo var_dump(json_decode('{"Peter":35,"Ben":37,"Joe":43}'));


// Accessing the Decoded Values

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;


$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}



?>