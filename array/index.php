<?php
// Crear un array simple.
$array = array(1, 2, 3, 4, 5);
print_r($array);

echo "<br>";
// Ahora elimina cada elemento, pero deja el mismo array intacto:
foreach ($array as $i => $value) {
    unset($array[0]);
}
print_r($array);

echo "<br>";
// Agregar un elemento (note que la nueva clave es 5, en lugar de 0).
$array[] = 6;
print_r($array);

echo "<br>";
// Re-indexar:
$array = array_values($array);
//$array[] = 7;
print_r($array);
?>