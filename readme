# Street Feet — protótipo de loja virtual de tênis

Street Feet é um projeto acadêmico de site para uma loja de tênis. O repositório contém páginas de vitrine em HTML/CSS e uma implementação inicial de cadastro e autenticação em PHP com MySQL.

> **Status:** protótipo em desenvolvimento. As páginas de catálogo, promoções, destaques e contato ainda são estruturas visuais; não há fluxo completo de compra. Cadastro e login também precisam de correções antes de serem usados com dados reais.

## Objetivo

Organizar uma vitrine online para apresentar tênis, lançamentos e promoções. A proposta atual inclui páginas públicas e uma área acessível após login. O projeto ainda não implementa catálogo administrável, carrinho, checkout ou pagamentos.

## Tecnologias

- **HTML5** — estrutura das páginas.
- **CSS3** — estilos individuais das páginas.
- **PHP** — processamento inicial de cadastro, login, sessão e logout.
- **MySQL/MariaDB com MySQLi** — persistência prevista para usuários.

Não há framework, dependências Composer, migrações ou testes automatizados versionados no repositório.

## Estrutura atual

Os arquivos estão na raiz do repositório:

| Arquivo | Responsabilidade pretendida |
|---|---|
| `home.html`, `home.css` | Página inicial e imagem de apresentação. |
| `products.html`, `products.css` | Página de produtos; a listagem ainda está vazia. |
| `promocoes.html`, `promocoes.css` | Página de promoções; conteúdo ainda é placeholder. |
| `destaques.html`, `destaque.css` | Página de destaques e lançamentos; conteúdo ainda é placeholder. |
| `contact.html`, `contact.css` | Página de contato; formulário ainda não foi implementado. |
| `cadastro.php`, `cadastro.css` | Formulário e tentativa de gravação de cadastro. |
| `login.php`, `login.css` | Formulário de login. |
| `config.login.php` | Tentativa de validar credenciais e iniciar sessão. |
| `sistema.php`, `sistema.css` | Página protegida por sessão. |
| `sair.php` | Encerramento da sessão. |
| `redefinir_senha.php` | Formulário visual de redefinição, sem processamento funcional. |
| `conf.php` | Configuração atual da conexão MySQL. |
| `Home.png` e outro arquivo `.png` | Imagens incluídas no projeto. |

## Fluxo técnico planejado

```text
Navegador
  ├── páginas HTML/CSS (vitrine)
  └── páginas PHP
        ├── cadastro.php ──> conf.php ──> MySQL: projeto.atividade
        ├── config.login.php ──> conf.php ──> validação e sessão
        ├── sistema.php ──> verifica a sessão
        └── sair.php ──> encerra a sessão
```

Esse diagrama representa a intenção visível no código. O fluxo de autenticação atual contém erros e não deve ser considerado funcional ou seguro sem correções.

## Requisitos para desenvolvimento local

- PHP com a extensão `mysqli` habilitada.
- MySQL ou MariaDB.
- Navegador web.

### 1. Clonar o repositório

```bash
git clone https://github.com/gioribeirro/Projeto-Site-de-Tenis.git
cd Projeto-Site-de-Tenis
```

### 2. Preparar o banco de dados

O repositório não inclui um script SQL. O código atual espera um banco chamado `projeto`, uma tabela `atividade` e as colunas `nome`, `email`, `telefone`, `senha` e `conf_senha`.

O exemplo abaixo serve **somente para reproduzir a estrutura esperada localmente**. Ele espelha o código legado; não é um modelo recomendado para produção, pois a aplicação atual armazena senhas em texto puro e persiste também a confirmação da senha.

```sql
CREATE DATABASE projeto
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE projeto;

CREATE TABLE atividade (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(120) NOT NULL,
  email VARCHAR(254) NOT NULL,
  telefone VARCHAR(30) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  conf_senha VARCHAR(255) NOT NULL
);
```

### 3. Configurar a conexão

Ajuste `conf.php` para os dados do MySQL local. Atualmente, o arquivo usa `localhost`, usuário `root`, senha vazia e banco `projeto`. **Não use essas credenciais em um servidor público.** A configuração deve ser migrada para variáveis de ambiente antes de qualquer publicação.

### 4. Iniciar o servidor PHP local

Na raiz do projeto:

```bash
php -S 127.0.0.1:8000
```

Abra [http://127.0.0.1:8000/home.html](http://127.0.0.1:8000/home.html). As páginas PHP podem ser acessadas diretamente, por exemplo, em `/cadastro.php` e `/login.php`, desde que PHP e banco estejam configurados.

> Os caminhos de CSS e da imagem da página inicial precisam ser corrigidos para que os recursos carreguem com a estrutura atual dos arquivos.

## Funcionalidades e estado de implementação

| Recurso | Estado observado |
|---|---|
| Página inicial com imagem de apresentação | Parcial; o caminho da imagem e do CSS não corresponde à estrutura atual. |
| Navegação entre páginas | Parcial; alguns links usam nomes de páginas que não existem. |
| Produtos, promoções e destaques | Estrutura HTML presente, sem catálogo preenchido. |
| Cadastro | Formulário e tentativa de `INSERT` presentes; falta validação e há riscos de segurança. |
| Login e sessão | Código inicial presente, mas há incompatibilidades entre formulário e PHP e um erro no acesso aos dados enviados. |
| Logout | Script simples para limpar a sessão. |
| Recuperação de senha | Somente formulário visual; não envia nem atualiza a senha. |
| Contato | Página criada, sem formulário funcional. |
| Carrinho, checkout, frete e pagamentos | Não implementados. |

## Pendências prioritárias

### Prioridade crítica — segurança e autenticação

- Substituir consultas SQL concatenadas por prepared statements para impedir SQL injection.
- Usar `password_hash()` e `password_verify()`; nunca armazenar senha em texto puro.
- Validar se senha e confirmação são iguais e não salvar `conf_senha` no banco.
- Corrigir o login: o formulário envia `nome`, mas o PHP espera `email`; além disso, o código usa `$_POST('senha')` em vez de `$_POST['senha']`.
- Remover o formulário HTML aninhado em `login.php` e exibir mensagens para credenciais inválidas e erros de cadastro.
- Não guardar a senha na sessão; regenerar o ID da sessão após login e proteger a saída de dados HTML.
- Retirar credenciais do código-fonte e carregá-las de configuração local/variáveis de ambiente.
- Implementar redefinição de senha com fluxo seguro; o formulário existente não possui processamento PHP.

### Prioridade alta — funcionamento da vitrine

- Corrigir os caminhos dos arquivos CSS e de `Home.png`.
- Corrigir links quebrados (`promotions.html`/`highlights.html`) para os nomes de páginas existentes.
- Criar cards de produto com nome, descrição, preço, imagem, tamanho e disponibilidade.
- Implementar formulários reais para contato e, se fizer parte do escopo, cadastro/login.
- Definir se o projeto é somente uma vitrine ou uma loja com carrinho, frete, checkout e integração de pagamento.

### Prioridade média — manutenção e qualidade

- Criar um script SQL versionado para banco e tabela; remover a coluna de confirmação de senha na migração para autenticação segura.
- Organizar os arquivos em pastas como `assets/`, `css/` e `includes/`, ajustando os caminhos.
- Padronizar a navegação e os estilos compartilhados; revisar responsividade para celular e acessibilidade.
- Corrigir o HTML inválido, incluindo títulos dentro de elementos `<h2>` e o documento duplicado em `redefinir_senha.php`.
- Adicionar validação manual ou automatizada para cadastro, login, sessão, logout e navegação.
- Definir uma licença para esclarecer como outras pessoas podem reutilizar o projeto.

## Segurança e uso

Este projeto é adequado como base de estudo, mas **não está pronto para receber dados de usuários nem para produção**. As credenciais do banco, a autenticação em texto puro e as consultas SQL atuais precisam ser corrigidas antes de publicar o sistema.
