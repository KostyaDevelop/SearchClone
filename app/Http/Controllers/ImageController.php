<?php

namespace App\Http\Controllers;

use App\Managers\HistoryManager;
use App\Managers\Search4FacesManager;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Request;

class ImageController extends Controller
{
    private Search4FacesManager $search4FacesManager;

    public function __construct()
    {
        $this->search4FacesManager = app(Search4FacesManager::class);
    }
    public function getDetectFaces(Request $request): View
    {
        $image = $request->files->get('file');

        $imageHash = base64_encode(file_get_contents($image));

        $facesResult = $this->search4FacesManager->getImagesByFace($imageHash);

        return view('result',[
            'facesResult' => $facesResult
        ]);
    }
}
