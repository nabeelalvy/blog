<?php

namespace App;

class Session
{
    public $id = 0;

    public function __construct()
    {
        $this->id = 0;
    }

    public function add($id)
    {
        $this->id = $id;
    }

    public function destroy()
    {
        $this->id = 0;
    }

    public function getID()
    {
        return $this->id;
    }
}
