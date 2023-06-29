<?php

namespace App\Managers;

use App\Repositories\HistoryRepository;
use Illuminate\Support\Collection;

class HistoryManager
{
    private HistoryRepository $historyRepository;

    public function __construct()
    {
        $this->historyRepository = app(HistoryRepository::class);
    }

    /**
     * @param array $imagesInfo
     * @return void
     */
    public function create(array $imagesInfo): void
    {
       $lastSetId = $this->historyRepository->getLastRecordId();

       foreach ($imagesInfo as $imageInfo){
           $historyInfo['user_id'] = auth()->user()->getAuthIdentifier();
           $historyInfo['name'] = $imageInfo->first_name . ' ' . $imageInfo->last_name;
           $historyInfo['score'] = $imageInfo->score;
           $historyInfo['image_url'] = $imageInfo->source;
           $historyInfo['profile_url'] = $imageInfo->profile;
           $historyInfo['set_id'] = $lastSetId+1;

           $this->historyRepository->create($historyInfo);
       }
    }

    /**
     * @param int $userId
     * @return Collection
     */
    public function getHistoryGroupByUserId(int $userId): Collection
    {
        return $this->historyRepository->getHistoryGroupByUserId($userId);
    }

    /**
     * @param int $setId
     * @return Collection
     */
    public function getHistoryBySetId(int $setId): Collection
    {
       return $this->historyRepository->getHistoryBySetId($setId);
    }

}
