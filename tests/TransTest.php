<?php

namespace Mach3builders\Vuetrans\Tests;

use Mach3builders\Vuetrans\Trans;
use Mach3builders\Vuetrans\Tests\TestCase as BaseTestCase;

class TransTest extends BaseTestCase
{
    public function test_trans_get()
    {
        $trans = new Trans;

        $translations = $trans->get();

        $this->assertTrue(array_key_exists("auth", $translations));
    }

    public function test_route()
    {
        $response = $this->get('vuetrans/trans.js');

        $response->assertOk();
        $response->assertSee('auth');
    }
}
