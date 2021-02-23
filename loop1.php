<?php



$input = [2, 5, 3, 1, 0];

$output = [];

function multiplyBy2()
{for ($i = 0; $i < count($input); $i++) {
  $output[] = $input[$i] * 2;
}
}


// $output = [4, 10, 6, 2, 0]
//pas trouvé de fonction équivalente




//boucles équivalentes:

foreach($input as $value)
{$output[]=$value*2;};


$a=0;
while ($a <count($input)) {
  $output[]=$input[$a]*2;
  $a++;
}



