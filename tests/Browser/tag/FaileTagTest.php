<?php

namespace Tests\Browser\Tag;

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
     * @group tag
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
                ->click('.item2')
                ->waitForText('Create tag')
                ->press('Create tag')
                ->waitForText('Save tag')
                ->type('name', 'qwertyuiop')
                ->press('Save tag')
                ->waitForText('Tag does not exist')
                ->assertSee('Tag does not exist');
        });
    }
}
