<?php

namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Shop extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'shops';

    protected $guarded = [];
}
