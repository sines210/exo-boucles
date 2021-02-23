<?php

$input = [8, 6, 2, 9, 2, 1, 7];

$output = null;
$i = 0;


function isOutputInferiorToInput(){
  while ($i < count($input)) {
    if ($output < $input[$i]) {
      $output = $input[$i];
    }
    $i++;
  }
  return $output;
}

// $output = 7
//pas trouvé de fonction équivalente

//boucles équivalentes:


foreach($input as $value){
  if($output<$value)
  {$output = $value;}
}

for($j; $j<count($input); $j++)
{
  if($output<$input[$j])
  {$output = $input[$j];}
}



