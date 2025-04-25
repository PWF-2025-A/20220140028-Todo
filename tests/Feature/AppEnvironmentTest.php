<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AppEnvironmentTest extends TestCase
{
    public function testAppEnv()
    {
        if(App::environment(['testing', 'prod', 'dev', 'local'])){
            // kode program kita
            self::assertTrue(true);
        }
    }
}
