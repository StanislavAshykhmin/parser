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
                ->click('.sidebar-item .mr-2')
                ->pause(1000)
                ->click('.table tr:nth-child(8) .table-action a')
                ->pause(1000)
                ->press('Delete tag')
                ->pause(5000)
                ->assertSee('Tag deleted');
        });
    }
}
