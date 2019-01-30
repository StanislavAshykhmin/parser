<?php

namespace Tests\Browser\Tag;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DeleteTagTest extends DuskTestCase
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
                ->click('.table tr:nth-last-child(1) td:nth-child(5) a')
                ->waitForText('Delete tag')
                ->press('Delete tag')
                ->waitForText('Tag deleted')
                ->assertSee('Tag deleted');
        });
    }
}
