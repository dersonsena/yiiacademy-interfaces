<?php

namespace Yiiacademy\Core\Categorias;

class Premium implements ICategoria
{
    public function calcularDesconto($valor)
    {
        return $valor * 0.15;
    }
}