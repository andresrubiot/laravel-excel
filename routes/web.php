<?php

use App\Exports\UsersExport;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/download', function () {
    $userExport = new UsersExport;

    return $userExport->download('user.xlsx');
});
