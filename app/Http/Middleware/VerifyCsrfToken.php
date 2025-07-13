<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * Tambahkan semua endpoint API yang Tuan gunakan di web.php
     */
    protected $except = [
        'api/mahasiswa',
        'api/mahasiswa/*',
    ];
}
