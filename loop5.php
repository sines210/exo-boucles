<?php

$input = [3, 4, 3, 1, 5, 4];

$output = [];

function filtreDoublons(){
  foreach ($input as $value) {
    if (!in_array($value, $output)) {
      $output[] = $value;
    }
  }
}

// $output = [3, 4, 1, 5]
//retire les doublons
//fonction php equivalente => array_unique
//signature removeDoublons (array:input):array





//boucles équivalentes:

for($i=0; $i<count($input); $i++)
{if(!in_array($input[$i], $output))
{$output = $input[$i];}}


$j=0;
while($j<count($input))
{
  if(!in_array($input[$j], $output))
  {$output= $input[$j];}
}

