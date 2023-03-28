 <?php
/*function positif($a){
if($a<0){
     return  "chiffre negatif";
}else {
      return "chiffre positif";
}
}
echo "<p>".positif(5)."</p>";

echo positif(-5);

function plusgrand($a,$b,$c){
    return max($a,$b,$c);
}

echo "<p>".plusgrand(12,54,65)."<p>";

function pluspetit($a,$b,$c){
    return min($a,$b,$c);
}

echo "<p>".pluspetit(12,54,65)."<p>";

$ma_variable = "test";
echo $ma_variable;
echo "</br>".gettype($ma_variable); */

$tableau = array(12,15,14,65,10);

function plusgrand($t){
    $nombregrand = 0;
    foreach($t as $key => $value){
        
        if($value>$nombregrand){
            $nombregrand = $value;
        }
    }
    return $nombregrand;
}
echo plusgrand($tableau);
?>