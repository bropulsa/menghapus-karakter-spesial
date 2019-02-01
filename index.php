<?php
//Ini menghapus spesial karakter
$string2 = 'Contoh script menghapus spesial karakter dengan php /#/ 123';
$string3 = preg_replace('/[^A-Za-z0-9\ ]/','', $string2);
$string4 = preg_replace('!\s+!', ' ', $string3);
echo '.$string4.';

?>
