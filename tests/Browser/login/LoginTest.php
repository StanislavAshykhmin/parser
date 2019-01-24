<?php

namespace Tests\Browser\login;

use App\User;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     * @group regresssion
     * @group login1
     */
    public function testBasicExample()
    {
        $user = User::find(1);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                ->type('email', $user->email)
                ->type('password', 'corpsoft')
                ->press('Login')
                ->assertPathIs('/dashboard');
        });
    }
}
