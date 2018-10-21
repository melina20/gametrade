<?php


namespace Gametrade;


abstract class BaseList
{
    abstract public function fetch_all();
    abstract public function fetch_by_filter($filter_array);
}