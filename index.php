<?php
echo 'privet <br/>';

echo<<<html
<body>
<img src="puz.jpeg" width="500"<br/>
</body>
<br/>
html;

$ar = array(3,2,1,5,4);
//echo $ar[1];
echo "Было: <br/>";
echo print_r($ar);
echo "<br/><br/>";
echo "Стало: <br/>";
$isTrue = true;
while ($isTrue){
    $isTrue = false;
    for($i=0; $i<(count($ar)-1); $i++){
        if ($ar[$i] > $ar[$i+1]){
            $a = $ar[$i];
            $ar[$i] = $ar[$i+1];
            $ar[$i+1] = $a;
            $isTrue = true;
        }
    }
}
echo print_r($ar);
echo
<<<html
<br/><br/>goodbye, my friend!
html;
?>
