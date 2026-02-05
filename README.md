# 📦 Web Tools — PHP

Uma coleção de **ferramentas web em PHP** para facilitar **uploads de arquivos, requisições HTTP, CORS, respostas JSON e utilitários comuns** usados em aplicações web e APIs.

---

## 🧠 Visão Geral

O **Web Tools** é um pacote PHP modular e extensível, criado para agilizar tarefas comuns no desenvolvimento web, oferecendo:

- 📁 Upload de arquivos seguro e organizado  
- 🌐 Manipulação de requisições HTTP  
- 🔐 Configuração simples de CORS  
- 📤 Respostas JSON padronizadas  
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

## 🧪 Exemplo de Upload

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

## 🧪 Exemplo — Request

```php
<?php

use WebTools\Http\Request;

Request::init();

$id    = Request::get('id');
$name  = Request::get('name', 'Usuário');
```

---

# 🔐 CORS

Classe simples para habilitar **CORS (Cross-Origin Resource Sharing)** em APIs PHP.

Ideal para:
- APIs REST
- Frontends SPA (React, Vue, Angular)
- Integrações externas

---

## 🧪 Exemplo — CORS

```php
<?php

use WebTools\Http\Cors;

Cors::Init();

// Continuação da API
```

### Headers aplicados
- `Access-Control-Allow-Origin: *`
- `Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, OPTIONS`
- `Access-Control-Allow-Headers: Content-Type, Authorization`

Requisições `OPTIONS` retornam **204** automaticamente.

---

# 📤 JSON Output

Classe utilitária para **retornar respostas JSON padronizadas**, definindo status HTTP e tratando erros.

Ideal para APIs REST.

---

## 🧪 Exemplo — Resposta de Sucesso

```php
<?php

use WebTools\Output\Json;

$data = [
    'status' => 'success',
    'data'   => [
        'id' => 1,
        'name' => 'João'
    ]
];

Json::show($data, 200);
```

---

## ❌ Exemplo — Resposta de Erro

```php
<?php

use WebTools\Output\Json;

Json::show(null, 404, 'Recurso não encontrado');
```

### Estrutura de erro retornada
```json
{
  "error": {
    "message": "Recurso não encontrado",
    "code": 404
  }
}
```

---

## 📌 Recursos Principais

- 📦 Autoload PSR-4  
- 📁 Upload organizado por extensão  
- 🌐 Request unificada (GET, POST, JSON)  
- 🔐 CORS pronto para APIs  
- 📤 JSON padronizado com status HTTP  
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
