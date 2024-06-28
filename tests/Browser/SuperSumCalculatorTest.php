<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class SuperSumCalculatorTest extends DuskTestCase
{
    public function testFormSubmission()
    {
        $testData = [
            ['num1' => 10, 'num2' => 20, 'expectedSum' => 30],
            ['num1' => 15, 'num2' => 25, 'expectedSum' => 40],
            ['num1' => -10, 'num2' => 10, 'expectedSum' => 0],
        ];

        $this->browse(function (Browser $browser) use ($testData) {
            foreach ($testData as $data) {
                $browser->visit('/')
                    ->type('num1', $data['num1'])
                    ->type('num2', $data['num2'])
                    ->press('Calc now!')
                    ->assertInputValue('sum', $data['expectedSum']);
            }
        });
    }
}
