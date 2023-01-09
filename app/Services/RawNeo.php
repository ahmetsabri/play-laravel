<?php

namespace App\Services;

use Vinelab\NeoEloquent\ConnectionAdapter;

class RawNeo extends ConnectionAdapter
{

    public static function native($query)
    {

        $q =  app('neoeloquent.connection');
        return $q->raw($query);
    }
}
