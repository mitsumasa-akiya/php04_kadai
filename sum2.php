<!--5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。-->
<!--strip_tags-->

<?php

$str ="<h1>strip_tags関数</h1>"
 . "<p>tech_boost</p>";
 echo strip_tags($str)."\n";
 
 ?>
 
 <!--array_push-->
 
 <?php
 $sports = ["baseball","soccer","tennis"];
  
 array_push($sports,"volleyball","karate");
 
 print_r($sports);
 ?>
 
 <!--array_merge-->
 
 <?php
 
 $number1 = ["one","two","three"];
 $number2 = ["four","five"];
 $number3 = ["six","seven"];
 
 $number_merge = array_merge($number1,$number2,$number3);
 
 print_r($number_merge);
 
 ?>
 
 <!--time, mktime-->
 
 <?php
 date_default_timezone_set("UTC");
 
 echo "september  2, 2020 is on a" . date("1",mktime(0,0,0,9,2,2020));
 
 echo date("c",mktime(15,30,0,9,2,2020));
 
 ?>
 
 <!--date-->
 
<?php

date_default_timezone_set('UTC');


echo date("1");

echo date('l jS \of F Y h:i:s A');

echo "september 2, 2020 is on a " . date("l", mktime(0, 0, 0, 9, 2, 2020));

echo date(DATE_RFC2822);

echo date(DATE_ATOM, mktime(0, 0, 0, 9, 2, 2020));

?>
