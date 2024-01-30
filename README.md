
# Desafio - Laravel, Vite, Bootstrap e PostgreSQL

Bem-vindo! Este desafio tem como objetivo criar um cadastro de usuário com o framework Laravel, Laravel, Vite, Bootstrap e o banco de dados PostgreSQL. Siga as instruções abaixo para baixar, configurar e buildar o projeto.

## Instruções

### 1. Clonar o Repositório

Para começar, clone o repositório do GitHub localmente. Abra o terminal e execute o seguinte comando:

```bash
git clone https://github.com/passocurto/desafioLaravel.git
```

### 2. Instalar Dependências

Navegue até o diretório do projeto e instale as dependências do Composer:

```bash
cd desafioLaravel
composer install
```

Em seguida, instale as dependências do npm:

```bash
npm install
```
### 3. Configurar o Ambiente
Copie o arquivo .env.example para um novo arquivo chamado .env:

```bash
cp .env.example .env
```

Abra o arquivo `.env` e configure as informações do banco de dados PostgreSQL, bem como outras configurações necessárias. Certifique-se de definir as informações do banco de dados nos campos DB_DATABASE, `DB_DATABASE`, `DB_PASSWORD`.

### 4. Gerar a Chave de Aplicativo

Execute o seguinte comando para gerar a chave de aplicativo:

```bash
php artisan key:generate
```

### 5. Executar as Migrações do Banco de Dados

Execute as migrações para criar as tabelas do banco de dados:

```bash
php artisan migrate
```

### 6. Buildar os Ativos

Para buildar os ativos (assets) usando o Vite, execute:

```bash
npm run dev
```

Se estiver em ambiente de produção, você pode usar:

```bash
npm run build
```

### 7. Iniciar o Servidor

Inicie o servidor embutido do Laravel:

```bash
php artisan serve
```

O servidor estará acessível em `http://localhost:8000` por padrão.

### 8. Acesse no Navegador

Abra o navegador e acesse o seguinte URL para verificar se o projeto está funcionando corretamente:

```
http://localhost:8000
```

### 7. Explore o Projeto

Agora que o ambiente está configurado, explore o projeto conforme as instruções fornecidas.



# Telas do Projeto 

### 1. Tela incial

![Imgur](https://i.imgur.com/ycU6AAu.png)

### 2. Tela de Cadastro  

![Imgur](https://i.imgur.com/faUTRGJ.png)

### 2. Tela de Edição 

![Imgur](https://i.imgur.com/wuiJ0Qe.png) 

### 3. Tela de Exclusão 

![Imgur](https://i.imgur.com/kx06hIs.png) 



# API

### 1. Cadastro 

![Imgur](https://i.imgur.com/wi4UeLk.png) 

### 2. validação no cadastro 

![Imgur](https://i.imgur.com/fJeNp29.png) 




