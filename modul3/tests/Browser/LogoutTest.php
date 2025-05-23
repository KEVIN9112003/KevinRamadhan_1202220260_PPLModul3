<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group logout
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->clickLink('Log in')
            ->assertSee('Email')
            ->assertSee('Password')
            ->type('email',  'Kr416319@gmail.com')
            ->type('password', 'kevinadmin')
            ->press('LOG IN')
            ->waitFor('#click-dropdown')
            ->click('#click-dropdown')
            ->clickLink('Log Out');
        });
    }
}