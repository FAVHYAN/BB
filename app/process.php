<?php

$n = $_GET['n'];
$c = $_GET['c'];

$x = 0;
$array = array();

    while ($x<$c) {
      $num_aleatorio = rand(1,7);
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
	echo '}';
echo '<br>***************************************************************<br>';

echo 'Las operaciones para encontrar el resultado: <br>';

echo '<br>***************************************************************<br>';


	$resultado = $n%$array[$i];


	if($resultado == 0)
	{
	$resultado = $n/$array[$i];
	for ($j=0; $j < $resultado ; $j++) { 
			
			if($j == $resultado-1)
				$con = ' = '.$n;
			else
				$con = ' + ';
		$pc = $array[$i].$con;
		}
		echo '<br>';
		}else
		{
			
				for ($k=0; $k < $c ; $k++) { 


				$tc = $array[$i] + $array[$k]; 
				$vc = $n%$tc;
				$resultado = $array[$i] + $array[$k]+$vc;
						
						if($resultado == $n){

								if($vc == 0)
									$con = ' = '.$n;
								else
									$con = ' + '.$vc.' = '.$n;

						echo $array[$i].' + '.$array[$k].$con;
						
						echo '<br>';
						}				
					}
				}
			}

exit();