<?php

namespace Yiiacademy\Core\Categorias;

class CategoriaNova implements ICategoria
{
    public function calcularDesconto($valor)
    {
        return $valor * 0.10;
    }
}