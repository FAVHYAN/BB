<?php
session_start();
$n = $_GET['n'];
$c = $_GET['c'];
$x = 0;
$array = array();



while ($x<$c) {
	$num_aleatorio = rand(1,10);
	if (!in_array($num_aleatorio,$array)) {
		array_push($array,$num_aleatorio);
		$x++;
	}
}

echo '<br>';
echo '<br>';
echo '<br>***************************************************************<br>';
echo '<pre> Los valores que se tomaron para hacer la operación<br>';
echo '<br>***************************************************************<br>';
echo '{ ';
for ($i=0; $i < $c ; $i++) { 

	echo $array[$i].'&nbsp;';
}
echo '}'; echo ' ----- Cantidad de posibles ';

recorre($c,$n,$array);


function recorre($c,$n,$array){

 $matrix = array([$n+1],[$c]);

        for($j=0;$j<$c;$j++)

        {

 	           $matrix[0][$j] = 1;

        }

        for($i=1;$i<=$n;$i++)

        {
            for($j=0;$j<$c;$j++)

            {
                if($i>=$array[$j])
                  $resultadoi = $matrix[$i-$array[$j]][$j];
                else
                 $resultadoi = 0;


                if($j>=1)
                    $resultadoj = $matrix[$i][$j-1];
                   else
                	$resultadoj = 0;
     

                $matrix[$i][$j]=$resultadoi+$resultadoj;

            }

        }

        echo $matrix[$n][$c-1];
	}


