<?php

/*
  
  Creator: Halil Han Badem
  Github: https://github.com/halilhanbadem
  YouTube: https://www.youtube.com/channel/UCtlwa4itvPWAzPJCAQwLuUA
  Mail: halilhanbadem@gmail.com


*/

    $IlCek = $_GET['il'];

 	  function Find($start, $last, $result)
   {
     @preg_match_all('/' . preg_quote($start, '/') . 
     	'(.*?)' . preg_quote($last, '/').'/i', $result, $m);
     return @$m[1];
   }

   $link = "https://www.haberler.com/".$IlCek."/namaz-vakitleri/";
   $content = file_get_contents($link);

   $city = Find("<strong>", "</strong></td>", $content);
   echo $city[0] . "<br/>";
   echo $city[1] . "<br/>";
   echo $city[2] . "<br/>";
   echo $city[3] . "<br/>";
   echo $city[4] . "<br/>";
   echo $city[5] . "<br/>";
  
 ?>
