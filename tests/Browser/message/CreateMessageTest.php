<?php

namespace Tests\Browser\Message;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateMessageTest extends DuskTestCase
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
                ->press('Create message')
                ->waitForText('Text')
                ->type('#label_message', 'first-test')
                ->type('#title_message', 'first-test')
                ->type('text', 'first-test')
                ->click('.select2')
                ->click('option:nth-child(1)')
                ->click('#label_message')
                ->press('Save message')
                ->waitForText('Create message')
                ->assertSee('Message created');
        });
    }
}
