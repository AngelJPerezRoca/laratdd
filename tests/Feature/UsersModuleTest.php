<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /**
     * @test
     */
    public function testExample()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Mostrando listado de los usuarios');
    }
}
