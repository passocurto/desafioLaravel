<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use App\Models\User;


class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // Use essa trait para garantir um banco de dados limpo durante os testes.
    //use RefreshDatabase;

    /** @test */
    public function it_can_create_a_user()
    {
        $userData = [
            'name' => 'Nome do Usuário',
            'email' => 'usuario@example.com',
            'password' => 'senha123',
            'password_confirmation' => 'senha123',
        ];

        // Envie uma requisição POST para a rota de criação de usuários
        $response = $this->post('/register', $userData);

        // Verifique se o usuário foi criado com sucesso
        $response->assertStatus(302);
        // Verifica se o status da resposta é 302 (Created) and redirect

        // Verifica se o usuário existe no banco de dados
        $this->assertDatabaseHas('users', [
            'name' => $userData['name'],
            'email' => $userData['email'],
        ]);
    }
}
