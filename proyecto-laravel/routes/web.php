<?php

use Illuminate\Support\Facades\Route;

Route::view(uri: '/', view: 'inicio');

Route::view(uri: '/formulario', view: 'formulario')->name('cico');

Route::view(uri: '/consultar', view: 'clientes')->name('osito');

