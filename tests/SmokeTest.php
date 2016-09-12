<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SmokeTest extends TestCase
{
		// '@test' annotation used so we don't have to prefix the method names with the word 'test'

    /**
     * @test
     */
    public function all_views_have_response_code_ok()
    {
        $this->visit('/')
             ->assertResponseOk();
        $this->visit('/forms/es-survey/2016/1')
             ->assertResponseOk();
    }
}
