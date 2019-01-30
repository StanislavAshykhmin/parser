<?php

namespace Tests\Browser\System;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ListSitesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     * @group regresssion
     * @group system
     */
    public function testExample()
    {
        $user = User::find(1);
        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                ->type('email', $user->email)
                ->type('password', 'corpsoft')
                ->press('Login')
                ->waitForText('Tags')
                ->click('.item3')
                ->waitForText('Quantity')
                ->click('.table tr:nth-child(1) td:nth-child(1) a')
                ->waitForText('Systems')
                ->assertSee('View all systems');
        });
    }
}
