<?php

include('pagina.php');

$quemSomos = new Pagina;
$quemSomos->titulo = 'Contato';
$quemSomos->paragrafo = 'Envie sua duvida';

$quemSomos->imprimeHTML();