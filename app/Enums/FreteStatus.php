<?php

namespace App\Enums;

enum FreteStatus: string
{
    case EM_TRANSITO = "Em Trânsito";
    case SAIU_PARA_ENTREGA = "Saiu para entrega";
    case ENTREGUE = "Entregue";

    public function pegarCorEtiqueta (): string
    {
        return match($this){
                self::EM_TRANSITO => 'bg-yellow-100 text-yellow-880',
                self::SAIU_PARA_ENTREGA => 'bg-yellow-100 text-yellow-880',
                self::ENTREGUE => 'bg-green-100 text-green-880',
        };
    }
}
