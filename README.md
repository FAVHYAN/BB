# BB
this project is just to testing of for in for method.


Descipción

Se implemento el servicio solicitado segun la prueba.

1. se crea index y se añaden dependencias bootstrap y jquery
2. se realiza funcion(getWays) que captura la informacion de los campos
3. se realiza validacion a esos campos que deben estar llenos
4. se realiza funcion ajax apuntando al archivo del procedimiento

una vez se llega al procedimiento se toman los valores correspondientes:

$n: valor objetivo
$c: cantidad de items dentro del array
$array: contiene los valores a calcular

, se toma el campo c se le asignan valores aleatorias y sin repetir a la matriz principal con un loop while.

Luego realiza la impresion que muestra en el front y hace llamado a la funcion getways, la cual recibe tres parametros: la cantidad, el valor objetivo y la matriz generada en el anterior punto. 

Se inizializa una variable matriz la cual contiene un arreglo bidimencional aumentando en su primer posicion e ir adelante en cada posicion con un loop for, partiendo de ese punto se hacen for anidados en donde su alcance seran el valor objetivo y la cantidad que coloco el participanete en un inicio, se valida dentro de estos si la posicion del primer loop es mayor o igual a el valor del array enviado como parametro desde la funcion de partida, alli los resultados que encuentre como verdaderos, los asignara a una variable resultado segun es el caso, si no encuentra valor inicializa la variable en 0 de igual forma con la variable del segundo loop pero se valida que sea mayor o igual a 1 si es correcto le asigna el resultado de esa variable acorde a la matriz generada dentro de la funcion solo que a estos valores bidimencionales se les aplica un calculo el del primero seria: 

primera condicional

-primer dimension : posicion de primer ciclo menos matrix enviada como parametro con posiciondel segundo ciclo.
-segunda dimension: posicion del segundo cilo


segunda condicional

-primer dimension : posicion de primer ciclo, posicion del segundo ciclo menos 1.
-segunda dimension: posicion del segundo cilo

al final se asigna a la variable de matriz generada dentro del metodo la sumatoria de ambos resultados, llegando a si al resultado de cuantas variantes hay en que el valor objetivo sea representado en suma por los valores aleatorios seleccionados.


ec2-18-231-120-113.sa-east-1.compute.amazonaws.com

--------------------------------------------------------------------------------------------------------------------------------
You are working at the cash counter at a fun-fair, and you have different types of coins available to you in infinite quantities. The value of each coin is already given. Can you determine the number of ways of making change for a particular number of units using the given types of coins?
For example, if you have  types of coins, and the value of each type is given as  respectively, you can make change for  units in three ways: , , and .
Function Description
Complete the getWays function in the editor below. It must return an integer denoting the number of ways to make change.
getWays has the following parameter(s):
n: an integer, the amount to make change for
c: an array of integers representing available denominations
Input Format
The first line contains two space-separated integers describing the respective values of  and , where: 
 is the number of units 
 is the number of coin types 
The second line contains  space-separated integers describing the respective values of each coin type :  (the list of distinct coins available in infinite amounts).
Constraints

Each  is guaranteed to be distinct.
Hints
Solve overlapping subproblems using Dynamic Programming (DP): 
You can solve this problem recursively but will not pass all the test cases without optimizing to eliminate the overlapping subproblems. Think of a way to store and reference previously computed solutions to avoid solving the same subproblem multiple times. * Consider the degenerate cases: 
- How many ways can you make change for  cents? - How many ways can you make change for  cents if you have no coins? * If you're having trouble defining your solutions store, then think about it in terms of the base case . - The answer may be larger than a -bit integer.
Output Format
Print a long integer denoting the number of ways we can get a sum of  from the given infinite supply of types of coins.
Sample Input 0
4 3
1 2 3

Sample Output 0
4

Explanation 0
There are four ways to make change for  using coins with values given by :

Thus, we print  as our answer.
Sample Input 1
10 4
2 5 3 6


Sample Output 1
5


Explanation 1
There are five ways to make change for  units using coins with values given by :


Thus, we print  as our answer.
