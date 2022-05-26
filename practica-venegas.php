<?php

echo 'GitHub funciona!';

/*
 * @author Daniel Venegas Garcia
 * @version 1.0
 */

/*
 * Función suma de dos números
 * @param int $sum1
 * @param int $sum2
 * @return float
 */

function suma($sum1, $sum2) {
	$resultadosuma = $sum1 + $sum2;
	return $resultadosuma;
}

/*
 * Función que saluda mostrando un nombre
 * @internal Esta información es solo para desarrolladores
 * @param string $nombre
 * @return string
 */

function saludar($nombre) {
	$cadena = '<br>Bienvenido, ' . $nombre;
	return $cadena;
}

$suma = suma(24, 42);
$saludar = saludar('Daniel');

echo $suma;
echo $saludar;
?>
