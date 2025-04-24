<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Logout
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
                    ->assertSee('Dashboard') // menampilkan "Welcome" setelah login berhasil
                    ->press('Sarah Luki Raihani') // menekan akun pengguna "Sarah Luki Raihani" untuk memilih logout
                    ->clickLink('Log Out'); // mengklik link "Log Out" untuk halaman logout
        });
    }
}
