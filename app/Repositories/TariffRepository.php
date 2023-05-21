<?php

namespace App\Repositories;

use App\Models\Tariff;
use Illuminate\Support\Collection;

class TariffRepository
{
    public function getTariffs(): Collection
    {
        return Tariff::all();
    }
}
