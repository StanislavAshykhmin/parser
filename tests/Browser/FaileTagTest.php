<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class FaileTagTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     * @group regresssion
     * @group Parser
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
                ->press('Create tag')
                ->pause(1000)
                ->type('name', 'qwertyuiop')
                ->press('Save tag')
                ->pause(5000)
                ->assertSee('Tag does not exist');
        });
    }
}
