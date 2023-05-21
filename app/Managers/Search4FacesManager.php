<?php

namespace App\Managers;

use App\Services\Search4FacesService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Collection;

class Search4FacesManager
{
    private Search4FacesService $search4FacesService;

    public function __construct()
    {
        $this->search4FacesService = app(Search4FacesService::class);
    }

    /**
     * @param string $imageHash
     * @return Collection
     */
    public function getImagesByFace(string $imageHash, string $socialName): Collection
    {
        $faceInfo = $this->search4FacesService->detectFaces($imageHash);

        return $this->search4FacesService->searchFace($faceInfo, $socialName);
    }
}
