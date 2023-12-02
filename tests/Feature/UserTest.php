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
    use RefreshDatabase;

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
        $response = $this->post('/user/store', $userData);

        // Verifique se o usuário foi criado com sucesso
        $response->assertStatus(302);
        // Verifica se o status da resposta é 302 (Created) and redirect

        // Verifica se o usuário existe no banco de dados
        $this->assertDatabaseHas('users', [
            'name' => $userData['name'],
            'email' => $userData['email'],
        ]);
    }


    public function testEmailUniqueValidation()
    {

        $this->withExceptionHandling();

        // Crie um usuário com um e-mail específico
        $existingUser = User::factory()->create(['email' => 'existing@example.com']);

        // Tente criar um novo usuário com o mesmo e-mail
        $newUser = User::factory()->make(['email' => 'existing@example.com']);

        // Chame a rota ou método que realiza a criação de usuários
        $data = [
            'name' => $newUser->name,
            'email' => $newUser->email,
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ];

        $this->call('post', '/user/store', $data)
            ->assertSessionHasErrors('email');

        // Verifique se a mensagem de erro contém o termo 'unique'
        $this->assertStringContainsString('O campo email já está sendo utilizado.', session('errors')->first('email'));
    }



    /** @test */
    public function it_can_delete_a_user()
    {
        // Crie um usuário para excluir
        $user = User::factory()->create();

        // Chame a rota ou método que realiza a exclusão de usuários
        $response = $this->delete("/user/{$user->id}");

        // Verifique se a resposta é uma redireção
        $response->assertStatus(302);

        // Verifique se o usuário não existe mais no banco de dados
        $this->assertDatabaseMissing('users', ['id' => $user->id]);
    }
}
