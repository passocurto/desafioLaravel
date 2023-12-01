<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://static.wixstatic.com/media/54d165_d986d9ffd9c240d48be86b3c6143604b~mv2_d_5468_1474_s_2.png/v1/fill/w_209,h_56,al_c,q_95,enc_auto/Logo_Horizontal_Colorida.png" width="400" alt="Laravel Logo"></a></p>


# Desafio First Decision - Laravel, Vite, Bootstrap e PostgreSQL

Bem-vindo ao Desafio First Decision! Este desafio tem como objetivo criar um cadastro de usuário com o framework Laravel, Laravel, Vite, Bootstrap e o banco de dados PostgreSQL. Siga as instruções abaixo para baixar, configurar e buildar o projeto.

## Instruções

### 1. Clonar o Repositório

Para começar, clone o repositório do GitHub localmente. Abra o terminal e execute o seguinte comando:

```bash
git clone https://github.com/passocurto/desafioFirstDecision.git
```

### 2. Instalar Dependências

Navegue até o diretório do projeto e instale as dependências do Composer:

```bash
cd desafioFirstDecision
composer install
```

Em seguida, instale as dependências do npm:

```bash
npm install
```

Abra o arquivo `.env` e configure as informações do banco de dados PostgreSQL, bem como outras configurações necessárias. Certifique-se de definir as informações do banco de dados nos campos DB_DATABASE, `DB_DATABASE`, `DB_PASSWORD`.

### 3. Gerar a Chave de Aplicativo

Execute o seguinte comando para gerar a chave de aplicativo:

```bash
php artisan key:generate
```

### 4. Executar as Migrações do Banco de Dados

Execute as migrações para criar as tabelas do banco de dados:

```bash
php artisan migrate
```

### 5. Buildar os Ativos

Para buildar os ativos (assets) usando o Vite, execute:

```bash
npm run dev
```

Se estiver em ambiente de produção, você pode usar:

```bash
npm run build
```

### 6. Iniciar o Servidor

Inicie o servidor embutido do Laravel:

```bash
php artisan serve
```

O servidor estará acessível em `http://localhost:8000` por padrão.

### 7. Acesse no Navegador

Abra o navegador e acesse o seguinte URL para verificar se o projeto está funcionando corretamente:

```
http://localhost:8000
```

### 8. Realize o Desafio

Agora que o ambiente está configurado, explore o projeto e participe do desafio conforme as instruções fornecidas.
