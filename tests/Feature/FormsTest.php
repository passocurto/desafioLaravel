<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UserFormsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response_in_index_user()
    {
        // Crie alguns usuários para listar
        $users = User::factory(3)->create();

        // Chame a rota de listagem
        $response = $this->get('/user');

        // Verifique se a resposta contém os usuários
        foreach ($users as $user) {
            $response->assertSee($user->name);
        }

        // Verifique se a resposta possui o código HTTP 200 (OK)
        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_response_in_user_create()
    {
        $response = $this->get('/user/create');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_in_response_login()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_in_response_reset()
    {
        $response = $this->get('/password/reset');

        $response->assertStatus(200);
    }
}
