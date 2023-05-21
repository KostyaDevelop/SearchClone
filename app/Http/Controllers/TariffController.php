<?php

namespace App\Http\Controllers;

use App\Managers\TariffManager;
use Illuminate\Database\Eloquent\Collection;

class TariffController
{
    public TariffManager $tariffManager;

    public function __construct()
    {
        $this->tariffManager = app(TariffManager::class);
    }

    public function getTariffs(): Collection
    {
        return $this->tariffManager->getTariffs();
    }
}
