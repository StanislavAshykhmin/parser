<?php

namespace Tests\Browser\Message;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ViewMessageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     * @group regresssion
     * @group message
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
                ->click('.item4')
                ->waitForText('Systems')
                ->click('.table tr:nth-last-child(1) td:nth-child(2) a')
                ->waitForText('View message')
                ->assertSee('Text');
        });
    }
}
