<?php

namespace App\Services;

use App\Models\Result;

class ResultService
{
    public static function getAll()
    {
        return Result::all();
    }
}
