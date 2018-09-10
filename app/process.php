<?php
session_start();
$n = $_GET['n'];
$c = $_GET['c'];
$x = 0;
$array = array();

// $array = [1,2,3,4];

while ($x<$c) {
	$num_aleatorio = rand(1,6);
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
echo '}'; echo ' ----- Cantidad de posibles <input id="cantidad" readonly style="background: transparent;border:none" />';
echo '<br>***************************************************************<br>';

echo 'Las operaciones para encontrar el resultado: <br>';

echo '<br>***************************************************************<br>';

recorre($array,$n);


function recorre($array,$n,$ite){

		
	for ($i=0; $i < count($array) ; $i++) { 
		for ($j=0; $j < count($array); $j++) { 
			
			if($i <= $array[$i]){
				echo $resultadoi = $array[$i];
				echo ' + ';
			}
			if($j <= $array[$j]){
				echo $resultadoj = $array[$j];
			}


				$valor = $valor+count($resultado);
			if($resultado < $n){				
				recor($resultado,$resultadoi,$resultadoj,$n,$valor,$array);
			}else if($resultado == $n){
				echo '=';
				echo $resultado = $resultadoi+$resultadoj;
				cantidad($valor);

			}
			echo '<br>';
		}
		return $resultado;
	}
	
}

function recor($r,$r1,$r2,$n,$valor,$value){

for ($i=0; $i < count($value) ; $i++) { 
	# code...
}


				$valor = $valor+count($r);
				$resultado = $r+$r1;
				if($r < $n){
				echo  ' + '.$r1;
					recor($resultado,$r2,$r1,$n,$valor);
				}else if($r == $n){
					echo ' = '.$r;
				cantidad($valor);

				}
}



function cantidad($a){
	echo '<script>
	$("#cantidad").val('.$a.');

	</script>';
}

