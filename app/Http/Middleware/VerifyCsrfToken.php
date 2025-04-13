<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    protected $except = [
        //
        'api/*', // bỏ CSRF cho toàn bộ route bắt đầu bằng /api
    ];
}
