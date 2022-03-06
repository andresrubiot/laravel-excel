<?php

use App\Exports\UsersExport;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/download', function (UsersExport $userExport) {
    $userExport->store('user.xlsx', 'public');

    return 'Guardado Exitoso';
});
