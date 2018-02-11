<?php

Route::group(['prefix' => 'banten'], function() {
    Route::get('demo', 'Bantenprov\Banten\Http\Controllers\BantenController@demo');
});
