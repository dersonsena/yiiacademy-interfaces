<?php

namespace Yiiacademy\Core\Categorias;

class Prata implements ICategoria
{
    public function calcularDesconto($valor)
    {
        return $valor * 0.04;
    }
}