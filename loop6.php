<?php

$input = [3, 5, 2, 7, 1];
$output = [];

function getTheNumbersInferiorsToTheirPreviousOne(){
  for ($i = 0; $i < count($input); $i++) {
    $minIndex = $i;
    for ($j = $i + 1; $j < count($input); $j++) {
      if ($input[$j] < $input[$minIndex]) {
        $minIndex = $j;
      }
    }
    $min = $input[$minIndex];
    $input[$minIndex] = $input[$i];
    $output[] = $min;
  }
}


//$output[2,1]
//pas trouvé de fonction équivalente




//boucles équivalentes:

foreach ($input as $value)
{
  $minIndex = $value;
  for ($a = $value+1; $a<count($input); $a++)
  {if($input[$a]<$input[$minIndex])
  {$minIndex = $a;}}

  $min = $input($minIndex);
$input[$minIndex] = $value;
$output = $min;
}




$i=0;

while($i<count($input)){
  $minIndex = $i;
  for($j = $i+1; $j < count($input); $j++)
  {if($input[$j]<$input[$minIndex])
  {$minIndex = $j;}}

  $min = $input[$minIndex];
  $input[$minIndex] = $input[$i];
  $output[] = $min;
}


