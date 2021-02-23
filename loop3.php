<?php

$input = [3, 5, 2, 6, 5, 6, 2, 19];

$output = [];


function getPairNumbers(){
  foreach ($input as $number) {
    if ($number % 2 === 0) {
      $output[] =  $number;
    }
  }
  return $output;
}


// $output = [2, 6, 6, 2] ou [0,0,0,0]
//pas trouvé de fonction équivalente



//boucles équivalentes:

for ($i; $i<count($input);$i++)
{if($input[$i]%2===0)
{
  $output[]=$input[$i];
}}


$j=0;
while($j<count($input))
{
  if($input[$j]%2===0)
  {$output[]=$input[$j];}
  $j++;
}



