<?php

namespace Yiiacademy\Core;

use Exception;
use Yiiacademy\Core\Categorias\Bronze;
use Yiiacademy\Core\Categorias\ICategoria;
use Yiiacademy\Core\Categorias\Ouro;
use Yiiacademy\Core\Categorias\Prata;
use Yiiacademy\Core\Categorias\Premium;

class Compra
{
    private $produtos = [
        ['nome' => 'Leite', 'valor' => 10],
        ['nome' => 'Feijão', 'valor' => 34.67],
        ['nome' => 'Arroz', 'valor' => 5.65],
        ['nome' => 'Macarrão', 'valor' => 2.87],
        ['nome' => 'Farinha', 'valor' => 1.34],
    ];

    public function getTotal()
    {
        $total = 0;

        foreach ($this->produtos as $produto) {
            $total += $produto['valor'];
        }

        return $total;
    }

    public function getTotalComDesconto(ICategoria $categoria)
    {
        $total = $this->getTotal();
        return $categoria->calcularDesconto($total);
    }
}