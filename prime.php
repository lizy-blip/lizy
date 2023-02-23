<?php
$MyNum = 21;
$n = 0;

for($i = 2; $i < $MyNum; $i++) {
  if($MyNum % $i == 0){
    $n++;
    break;
  }
}

if ($n == 0){
  echo $MyNum." is a prime number.";
} else {
  echo $MyNum." is not a prime number.";
}
?>