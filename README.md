# Danki Backend - Projeto 05 (Painel de Controle)

![PHP Version](https://img.shields.io/badge/PHP-7.0+-blue)
![License](https://img.shields.io/badge/License-Open%20Source-brightgreen)

## 📋 Descrição do Projeto

**Danki Backend - Projeto 05** é um sistema completo de **painel de controle administrativo** desenvolvido em PHP, destinado a demonstrar práticas de desenvolvimento web profissional. O projeto integra um **site institucional público** com um **painel administrativo privado** (dashboard), permitindo gerenciamento de conteúdo, usuários e comunicação via e-mail.

Este é um projeto educacional do curso de **Desenvolvimento Web Completo** da Danki Code, focado em consolidar conhecimentos de:
- Arquitetura MVC
- Segurança em aplicações web
- Manipulação de banco de dados relacional
- AJAX e comunicação assíncrona
- Processamento de imagens
- Autenticação e autorização

---

## ✨ Funcionalidades Principais

### 🌐 Site Público
- **Página Inicial (Home)** - Apresentação da empresa/serviço
- **Página Sobre** - Informações sobre a organização
- **Página Depoimentos** - Feedback de clientes
- **Página Serviços** - Catálogo de serviços oferecidos
- **Página Contato** - Formulário de comunicação com envio de e-mail automático
- **Sistema de Mapa** - Integração com mapa para localização

### 🔐 Painel Administrativo
- **Sistema de Login** - Autenticação de usuários com controle de sessão
- **Gerenciamento de Usuários** - Criar, editar e deletar usuários administrativos
- **Controle de Cargos** - Três níveis de permissão:
  - Usuário Normal (0)
  - Sub Administrador (1)
  - Administrador (2)
- **Dashboard Principal** - Visão geral do sistema
- **Formulário Dinâmico** - Interface para edição de conteúdo

### 📧 Sistema de E-mail
- **Envio Automático de E-mails** - Processamento de mensagens via AJAX
- **SMTP com PHPMailer** - Suporte a autenticação SSL/TLS
- **Formatação HTML** - E-mails formatados com HTML + fallback em texto

### 🖼️ Manipulação de Imagens
- **WideImage Library** - Biblioteca robusta para processamento de imagens
- **Suporte a Múltiplos Formatos** - BMP, GD, GD2, GIF, JPEG, PNG, TGA
- **Operações Avançadas** - Resize, crop, rotate, filtros, ajuste de gamma, etc.

---

## 🏗️ Arquitetura do Projeto

```
Site Público (Frontend)
    ├── index.php (Roteador principal)
    ├── pages/ (Conteúdo público)
    ├── css/ (Estilos)
    ├── js/ (JavaScript)
    └── images/ (Mídia)
            ↓
        AJAX Requests
            ↓
Camada de Serviços
    ├── ajax/formularios.php (Processamento AJAX)
    ├── classes/ (Lógica de negócio)
    │   ├── Email.php
    │   ├── MySql.php
    │   └── Painel.php
    └── config.php (Configurações centralizadas)
            ↓
Painel Administrativo (Backend)
    ├── painel/index.php (Roteador painel)
    ├── painel/login.php (Autenticação)
    ├── painel/main.php (Dashboard)
    └── painel/css/ (Estilos do painel)
            ↓
Banco de Dados
    └── projeto_01 (MySQL)
        └── tb_admin.usuarios (Tabela de usuários)
```

---

## 📁 Estrutura de Pastas Detalhada

```
danki_backend-pjt05-main/
│
├── 📄 index.php                    # Página principal do site público
├── 📄 config.php                   # Configuração centralizada (DB, paths, constantes)
├── 📄 README.md                    # Este arquivo
│
├── 📂 painel/                      # Painel Administrativo
│   ├── index.php                   # Roteador principal do painel
│   ├── login.php                   # Formulário de autenticação
│   ├── main.php                    # Dashboard principal
│   ├── 📂 css/
│   │   └── style.css               # Estilos do painel
│   └── 📂 js/
│       ├── jquery.mask.js          # Plugin de máscaras de entrada
│       └── main.js                 # Scripts do painel
│
├── 📂 classes/                     # Classes PHP (Lógica de Negócio)
│   ├── MySql.php                   # Gerenciador de conexão PDO
│   ├── Email.php                   # Classe de envio de e-mails (PHPMailer)
│   ├── Painel.php                  # Lógica do painel (autenticação)
│   │
│   ├── 📂 phpmailer/               # PHPMailer Library (v5.x)
│   │   ├── class.phpmailer.php
│   │   ├── class.smtp.php
│   │   ├── class.pop3.php
│   │   ├── PHPMailerAutoload.php
│   │   ├── examples/               # Exemplos de uso
│   │   ├── language/               # Suporte a múltiplos idiomas
│   │   └── extras/                 # Bibliotecas auxiliares
│   │
│   └── 📂 lib/                     # WideImage Library (Processamento de Imagens)
│       ├── Canvas.php
│       ├── Image.php
│       ├── WideImage.php
│       ├── TrueColorImage.php
│       ├── PaletteImage.php
│       │
│       ├── 📂 Font/                # Gerenciamento de fontes
│       │   ├── GDF.php
│       │   ├── TTF.php (TrueType)
│       │   └── PS.php (PostScript)
│       │
│       ├── 📂 Mapper/              # Suporte a formatos de imagem
│       │   ├── BMP.php
│       │   ├── GIF.php
│       │   ├── JPEG.php
│       │   ├── PNG.php
│       │   ├── GD.php
│       │   ├── GD2.php
│       │   └── TGA.php
│       │
│       └── 📂 Operation/           # Operações de manipulação
│           ├── Resize.php
│           ├── Crop.php
│           ├── Rotate.php
│           ├── Flip.php
│           ├── Mirror.php
│           ├── AsGrayscale.php
│           ├── ApplyFilter.php
│           ├── ApplyConvolution.php
│           ├── ApplyMask.php
│           ├── Merge.php
│           ├── ResizeCanvas.php
│           ├── RoundCorners.php
│           ├── Unsharp.php
│           ├── AutoCrop.php
│           ├── CorrectGamma.php
│           ├── AddNoise.php
│           ├── AsNegative.php
│           └── CopyChannels*.php
│
├── 📂 ajax/                        # Handlers AJAX
│   └── formularios.php             # Processamento de formulários (envio de e-mail)
│
├── 📂 pages/                       # Páginas do site público
│   ├── home.php                    # Página inicial
│   ├── contato.php                 # Página de contato com formulário
│   ├── 404.php                     # Página de erro
│   └── [outros arquivos de conteúdo]
│
├── 📂 css/                         # Folhas de estilo
│   ├── style.css                   # Estilos principais
│   ├── font-awesome.min.css        # Ícones Font Awesome
│   └── font-awesome.css
│
├── 📂 js/                          # Scripts JavaScript
│   ├── jquery.js                   # jQuery
│   ├── scripts.js                  # Scripts principais
│   ├── formularios.js              # Validação e envio de formulários AJAX
│   ├── map.js                      # Integração com mapa
│   ├── constants.js                # Constantes JS
│   ├── slider.js                   # Carousel/Slider
│   └── exemplo.js                  # Exemplos de código
│
├── 📂 fonts/                       # Fontes personalizadas
│
├── 📂 images/                      # Imagens do site
│   └── ajax-loader.gif             # Indicador de carregamento
│
└── 📂 msql_e_painel/               # Documentação e recursos relacionados

```

---

## 🔧 Requisitos do Sistema

### Servidor
- **PHP** 7.0 ou superior
- **MySQL** 5.5 ou superior
- **Servidor Web** (Apache com mod_rewrite ou Nginx)

### Extensões PHP Obrigatórias
- `php-pdo` - Para acesso ao banco de dados
- `php-mysql` - Driver MySQL
- `php-gd` - Processamento de imagens
- `php-sockets` - Para SMTP (PHPMailer)

### Navegador
- Suporte a JavaScript
- Cookies ativados (para sessões)

---

## 🚀 Instalação e Configuração

### 1️⃣ Pré-requisitos
Certifique-se de ter instalado:
```bash
# Verificar versão do PHP
php -v

# Verificar extensões necessárias
php -m | grep -E "pdo|mysql|gd"
```

### 2️⃣ Clonar ou Baixar o Projeto
```bash
# Via Git (se disponível)
git clone https://github.com/seu-repo/danki_backend-pjt05.git
cd danki_backend-pjt05

# Ou descompacte o arquivo ZIP
unzip danki_backend-pjt05-main.zip
cd danki_backend-pjt05-main
```

### 3️⃣ Configurar o Banco de Dados

#### Criar a Base de Dados
```sql
-- Conectar ao MySQL como root
mysql -u root -p

-- Criar banco de dados
CREATE DATABASE projeto_01 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE projeto_01;

-- Tabela de Usuários (Administradores)
CREATE TABLE `tb_admin.usuarios` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nome` VARCHAR(255) NOT NULL,
  `user` VARCHAR(100) UNIQUE NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255),
  `cargo` INT DEFAULT 0,
  `img` VARCHAR(255),
  `data_criacao` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Inserir usuário padrão (admin/admin)
INSERT INTO `tb_admin.usuarios` 
(nome, user, password, cargo, email) 
VALUES 
('Administrador', 'admin', 'admin', 2, 'admin@example.com');
```

### 4️⃣ Configurar o Arquivo config.php

Edite `config.php` e atualize as constantes:

```php
<?php
// Caminho base do projeto (IMPORTANTE: Atualizar conforme seu ambiente)
define('INCLUDE_PATH','http://localhost:8080/seu-projeto/');
define('INCLUDE_PATH_PAINEL', INCLUDE_PATH.'painel/');

// Credenciais do Banco de Dados
define('HOST', 'localhost');      // Host do MySQL
define('USER', 'root');           // Usuário MySQL
define('PASSWORD', '');           // Senha MySQL
define('DATABASE', 'projeto_01');

// Credenciais de E-mail (Servidor SMTP)
// Atualize em ajax/formularios.php:
// $mail = new Email('smtp.seuservidor.com','seu@email.com','senha','Seu Nome');
?>
```

### 5️⃣ Configurar Permissões de Pasta

**Linux/Mac:**
```bash
# Dar permissão de escrita para uploads de imagens
chmod 755 images/
chmod 755 painel/
```

**Windows:**
- Usar propriedades da pasta → Segurança → Editar permissões

### 6️⃣ Iniciar o Servidor Web

**Usando PHP Built-in Server (Desenvolvimento):**
```bash
cd danki_backend-pjt05-main
php -S localhost:8080
```

**Usando Apache:**
```bash
# No terminal/cmd
sudo systemctl restart apache2  # Linux
# ou acesse http://localhost/seu-projeto/
```

### 7️⃣ Acessar o Projeto

- **Site Público:** `http://localhost:8080`
- **Painel Admin:** `http://localhost:8080/painel`
  - **Usuário padrão:** `admin`
  - **Senha padrão:** `admin`

---

## 💻 Como Usar

### Site Público

#### 1. Navegação
O site possui menu de navegação com as seguintes páginas:
- **Home** - Página de boas-vindas
- **Sobre** - Informações da empresa
- **Depoimentos** - Comentários de clientes
- **Serviços** - Catálogo de serviços
- **Contato** - Formulário de contato

#### 2. Enviar Mensagem de Contato
```
1. Clique em "Contato" no menu
2. Preencha os campos:
   - Nome
   - E-mail
   - Telefone
   - Mensagem
3. Clique em "Enviar"
4. A mensagem será processada via AJAX
5. Confirmação será exibida na tela
```

### Painel Administrativo

#### 1. Login
```
1. Acesse http://localhost:8080/painel
2. Insira credenciais:
   - Usuário: admin
   - Senha: admin
3. Clique em "Logar"
```

#### 2. Gerenciar Conteúdo
(Desenvolvido conforme necessidade do projeto)

#### 3. Logout
```
- Clique em "Sair" ou "Logout"
- Será redirecionado para a página de login
- Sessão será destruída
```

---

## 🗄️ Estrutura do Banco de Dados

### Tabela: `tb_admin.usuarios`

| Campo | Tipo | Descrição |
|-------|------|-----------|
| `id` | INT | Identificador único (Chave Primária) |
| `nome` | VARCHAR(255) | Nome completo do usuário |
| `user` | VARCHAR(100) | Nome de usuário (Único) |
| `password` | VARCHAR(255) | Senha (Recomendado: Hash) |
| `email` | VARCHAR(255) | E-mail do usuário |
| `cargo` | INT | Nível de permissão (0/1/2) |
| `img` | VARCHAR(255) | Caminho da foto de perfil |
| `data_criacao` | TIMESTAMP | Data/Hora de criação |

### Níveis de Cargo
- **0** - Usuário Normal (Permissões básicas)
- **1** - Sub Administrador (Permissões intermediárias)
- **2** - Administrador (Permissões totais)

---

## 🔐 Segurança

### ⚠️ Considerações Importantes

1. **Senhas em Texto Plano (CRÍTICO)**
   - ❌ **NÃO USE EM PRODUÇÃO**
   - O projeto armazena senhas sem hash
   - **Solução:** Use `password_hash()` e `password_verify()`

   ```php
   // Hash de senha (ao criar)
   $hashed = password_hash($password, PASSWORD_BCRYPT);
   
   // Verificar senha (ao fazer login)
   if(password_verify($password, $hashed)) { /* OK */ }
   ```

2. **SQL Injection Prevention**
   ✅ Projeto usa Prepared Statements com PDO
   ```php
   $sql = MySql::conectar()->prepare("SELECT * FROM usuarios WHERE user = ?");
   $sql->execute(array($user));
   ```

3. **Session Security**
   - Sessões armazenadas no servidor
   - Use `session_regenerate_id()` após login
   - Defina `session.secure` se usar HTTPS

4. **SMTP Credentials**
   ⚠️ Credenciais de e-mail hardcoded em `ajax/formularios.php`
   **Solução:** Usar variáveis de ambiente (.env)

5. **CORS e CSRF Protection**
   - Implementar token CSRF para formulários
   - Restringir origens CORS se usar API

6. **Input Validation**
   - Validar e sanitizar TODAS as entradas do usuário
   - Use `filter_var()` para e-mails, URLs, etc.

---

## 📧 Sistema de E-mail

### Configuração SMTP

Edite `ajax/formularios.php`:

```php
// Linha 14-15
$mail = new Email(
    'vps.seuservidor.com',      // Host SMTP
    'seu@email.com',             // Usuário
    'sua-senha',                 // Senha
    'Seu Nome'                   // Nome exibição
);

// Linha 16
$mail->addAdress('destinatario@email.com', 'Nome Destinatário');
```

### Provedores SMTP Comuns

| Provedor | Host | Porta | Segurança |
|----------|------|-------|-----------|
| Gmail | smtp.gmail.com | 587 | TLS |
| Gmail (SMTP Padrão) | smtp.gmail.com | 465 | SSL |
| Outlook | smtp.outlook.com | 587 | TLS |
| HostGator | smtp.seudominio.com | 465 | SSL |
| GoDaddy | smtp.seudominio.com | 465 | SSL |

**Nota:** Gmail requer [Aplicativo Específico](https://myaccount.google.com/apppasswords) em vez de senha regular.

---

## 🖼️ Manipulação de Imagens

O projeto inclui a biblioteca **WideImage** para processamento avançado de imagens.

### Operações Disponíveis

```php
// Resize/Redimensionar
$img->resize(800, 600);

// Crop/Cortar
$img->crop(100, 100, 400, 300);

// Rotate/Girar
$img->rotate(90);

// Flip/Espelhar (Horizontal)
$img->flip();

// Mirror/Espelhar (Vertical)
$img->mirror();

// Converter para Escala de Cinza
$img->asGrayscale();

// Aplicar Filtros
$img->applyFilter('grayscale');

// Aplicar Convolução (Desfoque, Sharpen, etc.)
$img->applyConvolution();

// Ajustar Gamma
$img->correctGamma(0.5);

// Merge/Mesclar Imagens
$img1->merge($img2, 0, 0);
```

### Exemplo de Uso

```php
// Incluir a biblioteca
require_once('classes/lib/WideImage.php');

// Carregar imagem
$image = WideImage::load('images/foto.jpg');

// Redimensionar para 800x600
$resized = $image->resize(800, 600);

// Salvar
$resized->saveToFile('images/foto-redimensionada.jpg');
```

---

## 🛠️ Arquitetura e Padrões de Design

### Padrões Utilizados

1. **Autoloader (SPL)**
   - Carregamento automático de classes via `spl_autoload_register()`
   - Evita `include/require` repetitivos

2. **Singleton Pattern**
   - Classe `MySql` implementa singleton para conexão do banco
   - Apenas uma instância da conexão PDO

3. **MVC (Partial)**
   - **Model:** Classes (MySql, Email, Painel)
   - **View:** Arquivos PHP com HTML/CSS
   - **Controller:** Arquivos PHP (index.php, formularios.php)

4. **Factory Pattern**
   - `MapperFactory` e `OperationFactory` na WideImage

---

## 🐛 Troubleshooting

### Problema: "Erro ao conectar" ao banco de dados

**Soluções:**
1. Verificar se MySQL está rodando
2. Validar host/usuário/senha em `config.php`
3. Verificar se banco `projeto_01` existe
4. Confirmar extensão `php-mysql` está ativada

```bash
php -m | grep -i mysql
```

### Problema: E-mail não está sendo enviado

**Soluções:**
1. Verificar credenciais SMTP em `ajax/formularios.php`
2. Confirmar porta SMTP correta (465 SSL, 587 TLS)
3. Verificar se servidor SMTP está acessível
4. Verificar logs de erro do PHP:
   ```bash
   tail -f /var/log/php-fpm.log
   ```

### Problema: Imagens não carregam

**Soluções:**
1. Verificar se pasta `images/` existe
2. Confirmar permissões: `chmod 755 images/`
3. Validar caminho em `config.php` - `INCLUDE_PATH`
4. Abrir DevTools (F12) → Console para erros JavaScript

### Problema: "Access denied" no painel

**Soluções:**
1. Confirmar credenciais (padrão: admin/admin)
2. Verificar se tabela `tb_admin.usuarios` foi criada
3. Validar registro do usuário no banco:
   ```sql
   SELECT * FROM `tb_admin.usuarios` WHERE user='admin';
   ```

---

## 📚 Recursos e Documentação

### Bibliotecas Utilizadas

1. **PHPMailer** (v5.x)
   - [GitHub](https://github.com/PHPMailer/PHPMailer)
   - [Documentação](https://github.com/PHPMailer/PHPMailer/blob/5.2-stable/README.md)

2. **WideImage**
   - [Site Oficial](http://wideimage.sourceforge.net/)
   - [Documentação](http://wideimage.sourceforge.net/documentation/)

3. **jQuery**
   - [Documentação](https://api.jquery.com/)

4. **Font Awesome**
   - [Documentação](https://fontawesome.com/)

### Referências de Aprendizado

- [PHP PDO](https://www.php.net/manual/en/class.pdo.php)
- [Sessions em PHP](https://www.php.net/manual/en/book.session.php)
- [AJAX com jQuery](https://api.jquery.com/jquery.ajax/)
- [MySQL Query Reference](https://dev.mysql.com/doc/refman/5.7/en/sql-statements.html)

---

## 📝 Licença

Este projeto é um trabalho educacional do curso **Desenvolvimento Web Completo** da [Danki Code](https://www.dankicode.com).

Uso para fins educacionais e comerciais conforme permitido pela instituição.

---

## 🤝 Contribuindo

Para melhorias ou correções:

1. Faça um Fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/MinhaFeature`)
3. Commit suas mudanças (`git commit -m 'Adiciona MinhaFeature'`)
4. Push para a branch (`git push origin feature/MinhaFeature`)
5. Abra um Pull Request

---

## ❓ FAQ

**P: Posso usar este projeto em produção?**
R: Não sem modificações. Recomendado: adicionar autenticação segura com hash de senha, HTTPS, validação de entrada robusta e proteção CSRF.

**P: Como adicionar novos usuários ao painel?**
R: Insira registros na tabela `tb_admin.usuarios` via MySQL, ou implemente interface de gerenciamento de usuários.

**P: É possível estender o sistema com mais funcionalidades?**
R: Sim! A arquitetura foi projetada para ser extensível. Adicione novas páginas em `pages/`, classes em `classes/`, e handlers AJAX em `ajax/`.

**P: Qual é o suporte para navegadores antigos?**
R: Projeto usa jQuery que suporta IE8+. Para navegadores mais antigos, será necessário atualizar o código.

---

## 📧 Suporte

Para dúvidas ou problemas:
- Consulte a seção [Troubleshooting](#-troubleshooting)
- Verifique a [Documentação](#-recursos-e-documentação)
- Entre em contato com a [Danki Code](https://www.dankicode.com)

---

## 📊 Estatísticas do Projeto

- **Linguagem Principal:** PHP
- **Banco de Dados:** MySQL
- **Framework Frontend:** jQuery
- **Linhas de Código:** ~5000+
- **Arquivos:** 50+
- **Bibliotecas Incluídas:** 3 (PHPMailer, WideImage, jQuery)

---

**Desenvolvido com ❤️ pela comunidade Danki Code**

*Última atualização: 2026*
