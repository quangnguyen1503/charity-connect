<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use App\Services\ResultService;

class ResultController extends Controller
{
    public function index()
    {
        $results = ResultService::getAll();
        return view('result.index', compact('results'));
    }
}
