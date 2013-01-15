<?php
header('Content-Type: text/html; charset=utf-8');

$fim_do_mundo = mktime(10, 20, 15, 01, 17, 2013);
$fim_do_mundo_segundos = $fim_do_mundo - time();

$dias_restantes = (int) ($fim_do_mundo_segundos / 86400);
$sobra_segundos = $fim_do_mundo_segundos % 86400;

$horas_restantes = (int) ($sobra_segundos / 3600);
$sobra_segundos = $sobra_segundos % 3600;

$minutos_restantes = (int) ($sobra_segundos / 60);
$sobra_segundos = $sobra_segundos % 60;

echo "Faltam $dias_restantes dias, $horas_restantes horas, $minutos_restantes minutos e $sobra_segundos segundos para o fim do mundo!";


?>