<?php

use Yiiacademy\Core\Categorias\Ouro;
use Yiiacademy\Core\Categorias\Prata;
use Yiiacademy\Core\Compra;

require_once __DIR__ . '/../vendor/autoload.php';

$compra = new Compra;
$prata = new Prata();
$ouro = new Ouro();
$novaCategoria = new \Yiiacademy\Core\Categorias\CategoriaNova();

echo $compra->getTotalComDesconto($novaCategoria);