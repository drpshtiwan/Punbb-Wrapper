<?php

namespace App\Utils;
use Carbon\Carbon;
Carbon::setLocale('ku');
class Date 
{

    public static function get($date,$format = 'U')
    {
        $carbon = Carbon::createFromFormat($format,$date);

        return ( $carbon->lte(Carbon::now()->subMonths(2)) )
                ?  $carbon->format('Y-m-d') 
                : $carbon->diffForHumans();
    }
}