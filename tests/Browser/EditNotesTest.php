<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EditNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group EditNotes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Log in') // melihat teks Log In
                    ->clickLink('Log in') // menekan tautan Log in
                    ->assertPathIs('/login') // memastikan url setelah menekan tautan sebelumnya
                    ->type('email', 'sarahlukiraihani@gmail.com') // mengisi input yang memiliki atribut email
                    ->type('password', 'sarahlukir') // mengisi input yang memiliki atribut name password
                    ->press('LOG IN') // menekan tombol submit dari form
                    ->assertPathIs('/dashboard') // memastikan url mengarah ke dashboard
                    ->clickLink('Notes') // menekan tautan notes
                    ->assertPathIs('/notes') // memastikan url setelah menekan tautan sebelumnya
                    ->clickLink('Edit') // klik link "Notes" untuk halaman edit
                    ->type('title', 'Modul 3 PPL') // mengisi input dengan perubahan baru
                    ->press('UPDATE'); // menekan tombol submit dari form
        });
    }
}
