<?php

namespace Tests\Browser;

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
                ->click('.table tr:nth-last-child(1) .table-action a')
                ->waitForText('Delete tag')
                ->press('Delete tag')
                ->waitForText('Tag deleted')
                ->assertSee('Tag deleted');
        });
    }
}
