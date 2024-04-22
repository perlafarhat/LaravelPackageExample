<?php

namespace Fhsinchy\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt($name) {
       
        return "Hello ". $name;
    }
}