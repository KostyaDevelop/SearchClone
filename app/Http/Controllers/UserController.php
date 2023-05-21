<?php

namespace App\Http\Controllers;

use App\Managers\TariffManager;
use Illuminate\Database\Eloquent\Collection;

class UserController
{
//    public TariffManager $tariffManager;

    public function __construct()
    {
//        $this->tariffManager = app(TariffManager::class);
    }

    public function registration()
    {
//        return $this->tariffManager->getTariffs();
    }
}
