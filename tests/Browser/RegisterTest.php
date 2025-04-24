<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') // mengunjungi halaman web utama
                    ->assertSee('Register') // melihat teks Register
                    ->clickLink('Register') // menekan tautan Register
                    ->assertPathIs('/register') // memastikan url setelah menekan tautan sebelumnya
                    ->type('name', 'Sarah Luki Raihani') // mengisi input name
                    ->type('email', 'sarahlukiraihani@gmail.com') // mengisi input yang memiliki atribut email
                    ->type('password', 'sarahlukir') // mengisi input yang memiliki atribut name password
                    ->type('password_confirmation', 'sarahlukir') // mengisi input yang memiliki atribut name password
                    ->press('REGISTER'); // menekan tombol submit dari form
        });
    }
}
