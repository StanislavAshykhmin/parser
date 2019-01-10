<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class GraphicTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     * @group regresssion
     * @group Graphic
     */
    public function testExample()
    {
        $user = User::find(1);
        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                ->type('email', $user->email)
                ->type('password', 'corpsoft')
                ->press('Login')
                ->pause(1000)
                ->press('Print Grafic')
                ->pause(1000)
                ->assertVisible('.chart');
        });
    }
}
