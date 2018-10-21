<?php

namespace Gametrade;


interface Connectable
{
    public function saveNewToDb();
    public function loadFromDb($id);
    public function saveEdited($data);
}