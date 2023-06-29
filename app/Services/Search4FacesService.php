<?php

namespace App\Services;

use App\ServiceShell\Search4FacesShell;
use Illuminate\Support\Collection;

class Search4FacesService
{
    private Search4FacesShell $search4FacesShell;

    public function __construct()
    {
        $this->search4FacesShell = app(Search4FacesShell::class);
    }

    /**
     * @param array $faceInfo
     * @return Collection
     */
    public function searchFace(array $faceInfo): Collection
    {
        $faceInfo['face'] = $faceInfo['faces'];
        unset($faceInfo['faces']);
        $faceInfo['face'] = (object)$faceInfo['face'][0];

        $faceInfo = array_merge($faceInfo, [
            'source'=> "vk_wall",
            'hidden'=> true,
            'results'=> '10',
            'lang'=> 'ru'
        ]);

        $params = [
            'id' => 'some-id',
            'params' => $faceInfo,
        ];

        return collect($this->search4FacesShell->send($params, __FUNCTION__)
            ->result);
    }

    /**
     * @param string $imageHash
     * @return array|null
     */
    public function detectFaces(string $imageHash): array
    {
        $params = [
            'id' => 'some-id',
            'params' => [
                'image' => $imageHash
            ]
        ];

        return collect($this->search4FacesShell->send($params, __FUNCTION__)
            ->result)->toArray();
    }
}
