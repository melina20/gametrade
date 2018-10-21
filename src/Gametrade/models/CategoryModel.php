<?php

namespace Gametrade;

use Gametrade\Categorylist;

class CategoryModel
{
    public function __construct()
    {

    }

     public function load_categories_filter($filter)
    {
        $category_list= new Gamelist();
        $arr = $category_list->fetch_by_filter($filter);

        return $arr;
    }
    
    public function load_categories()
    {
        $category_list = new Categorylist();
        $arr = $category_list->fetch_all();

        return $arr;
    }

}