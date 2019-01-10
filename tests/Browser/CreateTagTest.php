<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateTagTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     * @group regresssion
     * @group Tag
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
                ->click('.sidebar-item .mr-2')
                ->waitForText('Create tag')
                ->press('Create tag')
                ->waitForText('Save tag')
                ->type('name', 'java')
                ->press('Save tag')
                ->waitForText('Tag created')
                ->assertSee('java');
        });
    }
}
