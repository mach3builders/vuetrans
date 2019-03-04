<?php

namespace Mach3builders\Vuetrans;

class Trans
{
    /**
     * Get the translations
     *
     * @return array
     */
    public function get()
    {
        $loader = app('translation.loader');
        $namespaces = $loader->namespaces();
        $translations = $this->getTrans();

        if ($namespaces) {
            foreach ($namespaces as $key => $value) {
                $translations = array_merge($translations, $this->getTrans($value, $key));
            }
        }

        return $translations;
    }

    /**
     * Get all the translations on namespace
     *
     * @return array
     */
    public function getTrans($path=null, $key=null)
    {
        if(!$path){
            $path = resource_path() . '/lang/';
        }

        $lang = config('app.locale');

        $files   = glob($path . '/' . $lang . '/*.php');
        $strings = [];

        foreach ($files as $file) {
            $name  = !is_null($key)
                            ? $key . '::' . basename($file, '.php')
                            : basename($file, '.php');

            $strings[$name] = require $file;
        }

        return $strings;
    }

    /**
     * transform array to json
     *
     * @return json
     */
    public function json()
    {
        return json_encode($this->get());
    }

}
