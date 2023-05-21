<?php

namespace App\Http\Controllers;

use App\Managers\Search4FacesManager;
use App\Managers\TariffManager;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Request;

class PageController
{
    /**
     * @return View
     */
    public function getMainPage(): View
    {
        return view('main');
    }

    /**
     * @return View
     */
    public function getAboutPage(): View
    {
        return view('about');
    }

    /**
     * @return View
     */
    public function getSearchPage(): View
    {
        return view('search');
    }

    /**
     * @return View
     */
    public function getSearchResultPage(): View
    {
        return view('result');
    }

    /**
     * @return View
     */
    public function getHistoryPage(): View
    {
        return view('history');
    }

    /**
     * @return View
     */
    public function getTariffsPage(): View
    {
        $tariffs = app(TariffManager::class)->getTariffs();

        return view('tariffs',
            [
                'tariffs' => $tariffs
            ]
        );
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function download(Request $request)
    {
        $imageHash = base64_encode(
            $request->files->get('file')
        );

        return app(Search4FacesManager::class)->getImagesByFace($imageHash);
    }
}
