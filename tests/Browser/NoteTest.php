<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class NoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') // mengunjungi halaman web utama
                    ->assertSee('Log in') // melihat teks Log In
                    ->clickLink('Log in') // menekan tautan Log in
                    ->assertPathIs('/login') // memastikan url setelah menekan tautan sebelumnya
                    ->type('email', 'sarahlukiraihani@gmail.com') // mengisi input yang memiliki atribut email
                    ->type('password', 'sarahlukir') // mengisi input yang memiliki atribut name password
                    ->press('LOG IN') // menekan tombol submit dari form
                    ->assertPathIs('/dashboard') // memastikan url mengarah ke dashboard
                    ->assertSee('Notes') // melihat teks notes
                    ->clickLink('Notes') // menekan tautan notes
                    ->assertPathIs('/notes') // memastikan url setelah menekan tautan sebelumnya
                    ->press('Create Note') // menekan tombol create note untuk membuat notes
                    ->assertPathIs('/create-notes') // memastikan url setelah menekan tautan sebelumnya
                    ->type('title', 'Modul 3') // mengisi input yang memiliki atribut title
                    ->type('description', 'banyak banget') // mengisi input yang memiliki atribut description
                    ->press('CREATE') // menekan tombol submit dari form
                    ->assertPathIs('/notes'); // memastikan url mengarah ke dashboard
        });
    }
}
