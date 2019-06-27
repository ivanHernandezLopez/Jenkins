<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test */
    function it_loads_the_users_list_page()
    {
        $response = $this->get('/users');

        $response->assertStatus(200);

        $response->assertSee('Usuarios');
    }

    /** @test */
    function it_loads_the_users_show_page()
    {
        $response = $this->get('/user/5');

        $response->assertStatus(200);
        
        $response->assertSee('Detale de usuario 5');
    }

    /** @test */
    function it_loads_the_users_create_page()
    {
        $response = $this->get('/user');

        $response->assertStatus(200);
        
        $response->assertSee('Creando usuario');
    }

        /** @test */
    function it_loads_the_users_edit_page()
    {
        $response = $this->get('/user/7/edit');

        $response->assertStatus(200);
        
        $response->assertSee('Vista de usuario 7');
    }
}
