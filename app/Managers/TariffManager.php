<?php

namespace App\Managers;

use App\Models\Tariff;
use App\Repositories\TariffRepository;
use Illuminate\Database\Eloquent\Collection;

class TariffManager
{
    public TariffRepository $tariffRepository;

    public function __construct()
    {
        $this->tariffRepository = app(TariffRepository::class);
    }

    public function getTariffs(): Collection
    {
       return $this->tariffRepository->getTariffs();
    }
}
