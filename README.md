# 📦 Web Tools — PHP

Uma coleção de **ferramentas web em PHP** para facilitar **uploads de arquivos, requisições HTTP, CORS e utilitários comuns** usados em aplicações web e APIs.

---

## 🧠 Visão Geral

O **Web Tools** é um pacote PHP modular e extensível, criado para agilizar tarefas comuns no desenvolvimento web, oferecendo:

- 📁 Upload de arquivos seguro e organizado  
- 🌐 Manipulação de requisições HTTP  
- 🔐 Configuração simples de CORS  
- 🧰 Utilitários reutilizáveis  
- 📦 Integração simples via Composer  

O projeto utiliza **autoload PSR-4**, garantindo organização, compatibilidade e fácil manutenção.

---

## 🚀 Requisitos

- PHP **7.0 ou superior**
- Composer

---

## 📥 Instalação

### Via Packagist
```bash
composer require edilsonclaudino/web-tools
```

### Ambiente local / desenvolvimento
```bash
composer install
```

---

# 📁 Upload Class

Classe responsável por **fazer upload de arquivos**, validando extensão e tamanho, criando diretórios automaticamente e evitando conflitos de nomes.

---

## 🎯 Objetivo

- ✅ Validar extensões permitidas  
- 📏 Limitar tamanho máximo do arquivo  
- 📂 Criar pastas automaticamente por extensão  
- 🔐 Evitar sobrescrita de arquivos  
- 📄 Trabalhar diretamente com `$_FILES`

---

## 📂 Estrutura de Pastas Gerada

```text
uploads/
 ├── jpg/
 ├── png/
 ├── pdf/
 └── txt/
```

---

## 🧪 Exemplo de Upload

### Formulário HTML

```html
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <button type="submit">Enviar</button>
</form>
```

---

# 🌐 HTTP Request

Classe utilitária para **unificar dados de requisições HTTP**, suportando:

- GET
- POST
- JSON (`php://input`)

Todos os parâmetros são normalizados para **lowercase**.

---

## 🧪 Exemplo de Uso — Request

```php
<?php

use WebTools\Http\Request;

Request::init();

$name  = Request::get('name');
$email = Request::get('email', 'email@default.com');

echo $name;
echo $email;
```

---

# 🔐 CORS

Classe simples para habilitar **CORS (Cross-Origin Resource Sharing)** em APIs PHP.

Ideal para:
- APIs REST
- Integrações frontend (React, Vue, Angular)
- Requisições externas

---

## 🧪 Exemplo de Uso — CORS

```php
<?php

use WebTools\Http\Cors;

Cors::Init();

// Seu código da API continua aqui
```

### Headers aplicados automaticamente
- `Access-Control-Allow-Origin: *`
- `Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, OPTIONS`
- `Access-Control-Allow-Headers: Content-Type, Authorization`

Requisições `OPTIONS` retornam **204 (No Content)** automaticamente.

---

## 📌 Recursos Principais

- 📦 Autoload PSR-4  
- 📁 Upload organizado por extensão  
- 🌐 Request unificada (GET, POST, JSON)  
- 🔐 CORS pronto para APIs  
- 🧩 Código limpo e orientado a objetos  

---

## 🔮 Roadmap

- 🌐 HTTP Client (GET, POST, PUT, DELETE)  
- 📡 API Request Wrapper  
- 🛡️ Validação de dados  
- 🧾 Logger simples  
- 📁 Download Manager  

---

## 📄 Licença

Licença **MIT**.
