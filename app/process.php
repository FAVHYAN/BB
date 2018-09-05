<?php
session_start();
$n = $_GET['n'];
$c = $_GET['c'];
$x = 0;
$array = array();

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
for ($i=0; $i < $c ; $i++) { 


	for ($k=0; $k < count($array); $k++) { 
		$rp = $array[$l]+$array[$k];
		if($rp <= $n){
			if($rp == $n){


				echo $array[$k].'+'.$array[$i];
				echo '='.$rp;
				echo '<br>';
				$valor = count($rp);
				cantidad($valor);

			}else{


				for ($l=0; $l < count($array); $l++) { 
					$rp = $array[$i]+$array[$k]+$array[$l];

					if($rp <= $n){
						if($rp == $n){



							$valor = $valor+count($rp);
							cantidad($valor);

							echo $array[$i].'+'.$array[$k].'+'.$array[$l];
							echo '='.$rp;
							echo '<br>';
						}else{
							for ($j=0; $j < count($array); $j++) { 
								$rp = $array[$i]+$array[$k]+$array[$l]+$array[$j];

								if($rp <= $n){
									if($rp == $n){



										$valor = $valor+count($rp);
										cantidad($valor);

										echo $array[$i].'+'.$array[$k].'+'.$array[$l].'+'.$array[$j];
										echo '='.$rp;
										echo '<br>';
									}else{

										for ($e=0; $e < count($array); $e++) { 
											$rp = $array[$i]+$array[$k]+$array[$l]+$array[$j]+$array[$e];

											if($rp <= $n){
												if($rp == $n){



													$valor = $valor+count($rp);
													cantidad($valor);
													echo $array[$i].'+'.$array[$k].'+'.$array[$l].'+'.$array[$j].'+'.$array[$e];
													echo '='.$rp;
													echo '<br>';
												}else{
													
													for ($a=0; $a < count($array); $a++) { 
														$rp = $array[$i]+$array[$k]+$array[$l]+$array[$j]+$array[$e]+$array[$a];

														if($rp <= $n){
															if($rp == $n){

																$valor = $valor+count($rp);
																cantidad($valor);
																echo $array[$i].'+'.$array[$k].'+'.$array[$l].'+'.$array[$j].'+'.$array[$e].'+'.$array[$a];
																echo '='.$rp;
																echo '<br>';
															}
														}

													}	
												}
											}

										}	
									}
								}

							}			
						}
					}	

				}		
			}
		}
	}
	$resultado = $n%$array[$i];
	if($resultado == 0)
	{
		$resultado = $n/$array[$i];
		for ($j=0; $j < $resultado ; $j++) { 
			

			if($j == $resultado-1)
				$con = ' = '.$n;
			else
				$con = ' + ';
			echo $pc = $array[$i].$con;



		}
		$valor = $valor+count($pc);
		cantidad($valor);
		echo '<br>';
	}else
	{

		for ($k=0; $k < $c ; $k++) { 


			$tc = $array[$i] + $array[$k]; 
			$vc = $n%$tc;
			$resultado = $array[$i] + $array[$k]+$vc;

			if($resultado == $n){


				$valor = $valor+count($rp);
				cantidad($valor);
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

function cantidad($a){
	echo '<script>
	$("#cantidad").val('.$a.');

	</script>';
}