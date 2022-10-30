<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class aboutUsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
     /** @test */
    public function aboutUsExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Mengapa harus memilih TelusurTasik ?')
                    ->visit('/login')
                    ->type('email','admin@gmail.com')
                    ->type('password','123456')
                    ->press('Login')
                    ->assertSee('Dashboard')
                    ->visit('/edit-about-us')
                    ->type('judul','TelusurTasikmalaya')
                    ;
        });
    }
}
