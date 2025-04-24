<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DeletesNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group DeleteNotes
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
                    ->press('Delete'); // mengklik delete perubahan yang dilakukan
        });
    }
}
