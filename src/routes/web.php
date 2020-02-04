<?php


Route::group(
[
    'namespace' => 'Elfeqy\Env\Http\Controllers',
    'prefix'    => 'env'
], function ()
{
    Route::get('/{col}', function ($col)
    {
        return Env::get($col);   
    });
});