<?php

namespace App\Helpers;

use Illuminate\Support\Carbon;

class DateHelper
{
    /**
     * @param string $timestamp
     * @return string
     */
    public static function getTimeFromTimestamp(string $timestamp): string
    {
        return Carbon::parse($timestamp)->format('H:i');
    }

    /**
     * @param string $timestamp
     * @return string
     */
    public static function getDateFromTimestamp(string $timestamp): string
    {
        return Carbon::parse($timestamp)->format('d.m.Y');
    }
}
