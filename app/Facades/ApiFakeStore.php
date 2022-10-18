<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;


class ApiFakeStore extends Facade
{
    /**
     * Retorna o nome do Provedor de Serviço
     * @return String
     */
    protected static function getFacadeAccessor()
    {
        return 'fake-store';
    }
}