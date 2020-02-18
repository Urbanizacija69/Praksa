<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Statistic extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ip',
        'country',
        'country_code',
        'city',
        'continent',
        'latitude',
        'longitude',
        'time_zone',
        'postal_code',
        'org',
        'asn',
        'subdivision',
        'subdivision2'
    ];
}
