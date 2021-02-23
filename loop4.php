<?php

$input1 = [3, 5, 1, 2, 6, 3];
$input2 = 9;

$output = false;
$i = 0;

function isInArray(){
  while ($i < count($input1)) {
    if ($input1[$i] === $input2) {
      $output = true;
    }
    $i++;
  }
}


// $output = false
//signature isInArray [array:input1]:array

//=> FONCTION EQUIVALENTE IN_ARRAY


//boucles équivalentes:


for($j=0; $j<count($input1);$j++)
{if($input1[$j]===$input2)
{$output = true;}}


foreach($input1 as $value)
{if($value === $input2)
{$output = true;}
}



