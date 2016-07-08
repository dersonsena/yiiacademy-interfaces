<?php

namespace Yiiacademy\Core\Categorias;

class Bronze implements ICategoria
{
    public function calcularDesconto($valor)
    {
        return $valor * 0.01;
    }
}