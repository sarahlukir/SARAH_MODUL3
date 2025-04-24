<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ShowNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group ShowNotes
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
                    ->clickLink('Modul 3 PPL') // mengklik salah satu catatan dengan link "Modul 3 PPL"
                    ->assertPathIs('/note/2'); // memastikan bahwa pengguna diarahkan ke halaman detail notes
        });
    }
}
