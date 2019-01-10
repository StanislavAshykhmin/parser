<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DashboardTopTagTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     * @group regresssion
     * @group Visit
     */
    public function testExample()
    {
        $user = User::find(1);
        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                ->type('email', $user->email)
                ->type('password', 'corpsoft')
                ->press('Login')
                ->waitForText('Dashboard')
                ->assertSee('Visit');
        });
    }
}
