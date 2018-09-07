<?php
session_start();
$n = $_GET['n'];
$c = $_GET['c'];
$x = 0;
$array = array();

$array = [4,6];

// while ($x<$c) {
// 	$num_aleatorio = rand(1,6);
// 	if (!in_array($num_aleatorio,$array)) {
// 		array_push($array,$num_aleatorio);
// 		$x++;
// 	}
// }



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
for ($i=0; $i < $c ; $i++) { 



loopProcess($array[$i], $array, $n);	

	$resultado = $n%$array[$i];
	if($resultado != 0)
	{
	for ($k=0; $k < $c ; $k++) { 


			$tc = $array[$i] + $array[$k]; 
			$resultado = $array[$i] + $array[$k];

			if($resultado == $n){

				$con = ' = '.$n;

				echo $pc = $array[$i].' + '.$array[$k].$con;

				$valor = $valor+count($pc);
				cantidad($valor);
				echo '<br>';
				
			}else{

				$_SESSION['array'] = $array;
			}		
		}
	}
}

function cantidad($a){
	echo '<script>
	$("#cantidad").val('.$a.');

	</script>';
}


function loopProcess($item, $array, $n){

	unset($_SESSION['cl']);
	$i = 0;
	$pc = 1;

		 $result = $n / $item;
			    $result = explode('.',$result);
			    
			    $resultado = $result[0]*$item;

			    echo $item;
			    for ($j=0; $j < $result[0]-1 ; $j++) { 
			    	echo ' + '.$item;
			    	 }

			    $pc = $pc+$pc;

			    $valor = $valor+count($pc);
				cantidad($pc);

			    $falta = $n - $resultado;


			    for ($l=0; $l < count($array) ; $l++) { 
			    	if($array[$l] == $falta){
			    		echo ' + '.$falta;
			    	}
			    }
			    echo ' = '.$n;
	

			echo '<br>';
		
		  $rp = recorrido($array);
		      

		}



function recorrido($arg){
    $suma = 0;
    foreach ($arg as $key => $value) {
        if (is_array($value)){
            $array2 = $arg[$key];
              // echo $suma.' + '.recorrido($array2); 
             $suma = $suma + recorrido($array2);

        }else {

              // echo $suma.' + '.$value;
           $suma = $suma + $value;echo '<br>';
        }

    } 
    return $suma;
}

if($total == $n)
 echo $total = recorrido($array);
else
	recorrido($array);

