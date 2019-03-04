<?php

namespace Mach3builders\Vuetrans\Tests;

class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Set the package provider for the custom app
     *
     * @param [type] $app
     * @return void
     */
    protected function getPackageProviders($app)
    {
        return ['Mach3builders\Vuetrans\VueTransServiceProvider'];
    }
}
