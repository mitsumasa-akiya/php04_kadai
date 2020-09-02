<!--1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください-->

<?php
 function sum($max){
     $result = $max * 2;
     return $result;
 }
echo sum(100);
?>

<!--2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください-->

<?php
 function f($a,$b){
     return $a + $b;
 }
 echo f(2,5);
 ?>
 
 <!--3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。-->
 
 <?php
 function total_product($arr){
     $result = 1;
     foreach ($arr as $a){
         $result *= $a;
     }
     return $result;
  }
     echo total_product(array(1,3,5,7,9));
  ?>
  
  <!--4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。-->
 
 <?php
 function max_array($arr){
  
  $max_number = $arr[0];
  foreach($arr as $a){
   
   if($max_number < $a){
       $max_number = $a;
  }
 }
 
 return $max_number;
 }
 
 echo max_array(array(11,27,32,4,5,));
?>