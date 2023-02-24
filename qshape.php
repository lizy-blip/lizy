<?php
for ($i=0; $i<7; $i++)
{
  for ($j=0; $j<=7; $j++)
    {
  if (($j == 1 and $i!= 0 and $i != 6) or ($i == 0 and $j > 1 and $j < 5) or ($j == 5 and $i != 0 and $i != 5) or ($i == 6 and $j > 1 and $j < 4) or ($j == $i - 1 and $i > 3))
            echo "*";    
        else  
            echo "&nbsp ";     
    }        
  echo "<br>";
}
?>