<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ParserTagTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
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
                ->click('.sidebar-item .mr-2')
                ->pause(1000)
                ->click('.table tr:nth-child(7) td:nth-child(3) a .btn')
                ->pause(8000)
                ->assertSee('Parser finish');
        });
    }
}
