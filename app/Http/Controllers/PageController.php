<?php

namespace App\Http\Controllers;

use App\Managers\HistoryManager;
use App\Managers\TariffManager;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Request;

class PageController
{
    private HistoryManager $historyManager;

    public function __construct()
    {
        $this->historyManager = app(HistoryManager::class);
    }
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
        $user = auth()->user();

        if ($user){
            $resultsHistories = $this->historyManager->getHistoryGroupByUserId(
                $user->getAuthIdentifier()
            );

            return view('history',
                [
                    'resultsHistories' => $resultsHistories
                ]
            );
        } else {
            return view('main');
        }
    }

    /**
     * @param int $setId
     * @return View
     */
    public function getHistoryOnePage(int $setId): View
    {
        $user = auth()->user();

        if ($user){
            $resultsHistory = $this->historyManager->getHistoryBySetId($setId);

            return view('history_one',
                [
                    'resultsHistory' => $resultsHistory
                ]
            );
        } else {
            return view('main');
        }
    }

    /**
     * @return View
     */
    public function getAuthPage(): View
    {
        return view('auth');
    }

    /**
     * @return View
     */
    public function getRegistrationPage(): View
    {
        return view('registration');
    }

    /**
     * @return View
     */
    public function getPersonalCabinetPage(): View
    {
        return view('personal_cabinet');
    }

    /**
     * @return View
     */
    public function getLoginPage(): View
    {
        return view('login');
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

        return app(HistoryManager::class)->getImagesByFace($imageHash);
    }
}
