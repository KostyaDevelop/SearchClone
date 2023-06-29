<?php

namespace App\Managers;

use App\Services\Search4FacesService;
use Illuminate\Support\Collection;

class Search4FacesManager
{
    private Search4FacesService $search4FacesService;
    private HistoryManager $historyManager;

    public function __construct()
    {
        $this->search4FacesService = app(Search4FacesService::class);
        $this->historyManager = app(HistoryManager::class);
    }

    /**
     * @param string $imageHash
     * @return Collection
     */
    public function getImagesByFace(string $imageHash): Collection
    {
        $faceInfo = $this->search4FacesService->detectFaces($imageHash);
        $imagesInfo = $this->search4FacesService->searchFace($faceInfo)['profiles'];
        $this->historyManager->create($imagesInfo);

        return collect($imagesInfo);
    }
}
