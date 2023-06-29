<?php

namespace App\Repositories;

use App\Models\History;
use Illuminate\Support\Collection;

class HistoryRepository
{
    /**
     * @param array $imageInfo
     * @return void
     */
    public function create(array $imageInfo): void
    {
        History::create($imageInfo);
    }

    /**
     * @return int
     */
    public function getLastRecordId(): int
    {
        return History::all()->last()->id ?? 0;
    }

    /**
     * @param int $userId
     * @return Collection
     */
    public function getHistoryGroupByUserId(int $userId): Collection
    {
        return History::where('user_id', $userId)
            ->get()
            ->groupBy('set_id');
    }

    /**
     * @param int $setId
     * @return Collection
     */
    public function getHistoryBySetId(int $setId): Collection
    {
        return History::where('set_id', $setId)
            ->get();
    }
}
