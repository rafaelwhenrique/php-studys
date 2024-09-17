<?php
'
- Um `1` é a mesma coisa que `true`;
- Zero `0` é a mesma coisa que `false`;
';
// (==) IGUALDADE
$util = 5;
var_dump($util == 5);
/*
o PHP faz uma conversão automática (coerção de tipos)
(!=) Diferença 
*/

var_dump('100' != 100); // Output: false (coerção de tipos)

var_dump('cem' != 100); // Output: true 

// (===) idêntico

var_dump(0 === false) . PHP_EOL; //false
var_dump('123' === 123) . PHP_EOL; //false
var_dump('um' === 1) . PHP_EOL; //false
var_dump(123.0 === 123) . PHP_EOL; //false

//É tudo falso :(, por isso não retorna nada

/** 
 *                              NOTAS
 * 
 * Também existem outros operadores, tais como: Não idêntico `!==`
 *  O PHP suporta quatro operadores maiores/menores que:
 *    - `<` menor que;
 *    - `>` maior que;
 *    - `<=` menor ou igual a;
 *    - `>=` maior ou igual a.
 * 
 * - O PHP tenta converter os valores na comparação de igual duplo `==`, * e diferente `!=`;
 * 
 * - Por isso que a `string` `'123'`' é igual `==` ao número `123` e o * * retorno é `true`, mas **não é** idêntica `===`;
 * 
 * - Na comparação de idênticos `===` o PHP não tenta converter os      * valores;
 * 
 * - Por isso, quando você tenta comparar se a string `'123'` é idêntica * `===` ao número `123`, o retorno é `false`, ou seja, diferente.
 */