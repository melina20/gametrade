<?php

namespace Gametrade;

use Gametrade\Platformlist;


class PlatformModel
{
    public function __construct()
    {

    }

    public function load_platforms()
    {
        $platformlist = new Platformlist();
        $arr = $platformlist->fetch_all();

        return $arr;
    }

}