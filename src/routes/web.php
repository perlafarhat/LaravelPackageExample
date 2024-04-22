<?php

use Fhsinchy\Inspire\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('inspire', function(Fhsinchy\Inspire\Inspire $inspire) {
    return $inspire->justDoIt("Perla");
});