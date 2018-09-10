# BB
this project is just to testing of for in for method.


Descipción

Se implemento el servicio solicitado segun la prueba.

1. se crea index y se añaden dependencias bootstrap y jquery
2. se realiza funcion(getWays) que captura la informacion de los campos
3. se realiza validacion a esos campos que deben estar llenos
4. se realiza funcion ajax apuntando al archivo del procedimiento

una vez se llega al procedimiento se toman los valores correspondientes, se toma el campo c se le asignan
valores aleatorias y sin repetir a la matriz principal, luego de ello.

Luego de ello realiza un for principal para recorrer todo el arreglo y empezar a sumar campo a campo
creando otra loop interno y validando la sumatoria para verificar si son mayores a la variable n.

cuando encuentra en algunos casos que  su mod es cero, simplemente pinta que valores realizan la sumatoria
para que de el numero correspondiente, en cuanto a la matriz principal, con los valores que no dan cero en su mod,
se recorre el array hasta llegar a dicho numero validando en que sean menores, si  ve que son mayores simplemente los 
desecha, de lo contrario pinta la operacion, por ultimo se integro un contador para verificar cuantas variables
hay con la cantidad de parametros dentro de la matriz para realizar su funcionalidad.

Ya por ultimo se integro un diseño basico desde un servicio free de landings y dejar una mejor estructura.

aca se encuentra el link de acceso a la prueba 

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
