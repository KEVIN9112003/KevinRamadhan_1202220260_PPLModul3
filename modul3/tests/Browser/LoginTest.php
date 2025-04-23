<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Enterprise')
                    ->clickLink('Log in')
                    ->assertPathIs('/login')
                    ->type('email',"Kr416319@gmail.com")
                    ->type('password','kevinadmin')
                    ->press('LOG IN')
                    ->assertPathIs('/dashboard');

        });
    }
}
