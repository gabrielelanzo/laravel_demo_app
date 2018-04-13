<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class IndexTest extends DuskTestCase
{
    /**
     * Testing the card title in the Index page is showing.
     *
     * @return void
     */
    public function testCardTitle()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Index View');
        });
    }
}
