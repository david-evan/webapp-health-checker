<?php

namespace App\Models;

use App\Models\Base\UuidModel;

/**
 * Represent a Healcheck, that'll be generated when WHC call your
 * defenited healchecker
 *
 * Class Healthchecker
 * @package App\Models
 */
class Healthcheck extends UuidModel
{
    public $table = 'healthcheck';

    public function healthchecker()
    {
        return $this->belongsTo('App\Models\Healthchecker');
    }
}