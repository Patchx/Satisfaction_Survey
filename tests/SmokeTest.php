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
    public function allViewsHaveResponseCodeOk()
    {
        $this->visit('/')
             ->assertResponseOk();
    }
}
