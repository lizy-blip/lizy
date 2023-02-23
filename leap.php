<?php
   function year_check($my_year){
      if ($my_year % 400 == 0)
       echo("It is a leap year");
      else if ($my_year % 100 == 0)
        echo("It is not a leap year");
      else if ($my_year % 4 == 0)
         echo("It is a leap year");
      else
         echo("It is not a leap year");
   }
   $my_year = 2004;
   year_check($my_year);
?>
