<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class IntegrationTest extends TestCase
{
    /**
     * @test
     */
    public function complete_satisfaction_survey_step_1()
    {
        $this->visit('/')
             ->click('Get Started')
             ->see('Employee Satisfaction Survey')
             ->see('Step 1');
    }
}
