<?php
session_start();
$n = $_GET['n'];
$c = $_GET['c'];
$x = 0;
$array = array();

// $array = [4,6];

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

recorrido($array);	



function cantidad($a){
	echo '<script>
	$("#cantidad").val('.$a.');

	</script>';
}



function recorrido($arg){
    $suma = 0;
    foreach ($arg as $key => $value) {
        if (is_array($value)){
            $array2 = $arg[$key];
             $suma = $suma + recorrido($array2);
        }else {
  			
  			if($suma == 0){
             	$suma = recorrido($array2) + recorrido($array2);
              	}else{
              echo $suma.' + '.$value; 

             $suma = $suma + recorrido($array2);
echo '<br>';
         		}
           $suma = $suma + $value;
        }

    } 
    return $suma;
}
echo '<br>';
 echo ' = '.$total = recorrido($array);

