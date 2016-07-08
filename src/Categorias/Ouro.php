<?php

namespace Yiiacademy\Core\Categorias;

class Ouro implements ICategoria
{
    public function calcularDesconto($valor)
    {
        return $valor * 0.07;
    }
}