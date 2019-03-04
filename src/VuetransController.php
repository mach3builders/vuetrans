<?php

namespace Mach3builders\Vuetrans;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Translation\ArrayLoader;

class VuetransController extends BaseController
{
    /**
     * Get the translations and return it as a window object
     *
     * @return response
     */
    public function get()
    {
        $strings = Cache::rememberForever('trans.js', function() {
            return (new Trans)->json();
        });

        return response("window.m3lang = {$strings};");
    }
}
