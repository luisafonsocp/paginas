<?php

include('pagina.php');

$quemSomos = new Pagina;
$quemSomos->titulo = 'Quem Somos';
$quemSomos->paragrafo = 'Somos uma empresa';

$quemSomos->imprimeHTML();