# 📦 Web Tools — PHP

Uma coleção de **ferramentas web em PHP** para facilitar **uploads de arquivos, requisições HTTP, CORS, respostas JSON/XML e utilitários comuns** usados em aplicações web e APIs.

---

## 🧠 Visão Geral

O **Web Tools** é um pacote PHP modular e extensível, criado para agilizar tarefas comuns no desenvolvimento web, oferecendo:

- 📁 Upload de arquivos seguro e organizado  
- 🌐 Manipulação de requisições HTTP  
- 🔐 Configuração simples de CORS  
- 📤 Respostas JSON padronizadas  
- 📄 Respostas XML padronizadas  
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

## 🧪 Exemplo — Upload

```html
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <button type="submit">Enviar</button>
</form>
```

---

# 🌐 HTTP Request

Classe utilitária para **unificar dados de requisições HTTP**, suportando GET, POST e JSON.

---

## 🧪 Exemplo — Request

```php
<?php

use WebTools\Http\Request;

Request::init();

$id   = Request::get('id');
$name = Request::get('name', 'Usuário');
```

---

# 🔐 CORS

Classe simples para habilitar **CORS (Cross-Origin Resource Sharing)** em APIs PHP.

---

## 🧪 Exemplo — CORS

```php
<?php

use WebTools\Http\Cors;

Cors::Init();
```

---

# 📤 JSON Output

Classe utilitária para **retornar respostas JSON padronizadas**, com status HTTP e tratamento de erros.

---

## 🧪 Exemplo — JSON Sucesso

```php
<?php

use WebTools\Output\Json;

Json::show([
    'status' => 'success',
    'data' => ['id' => 1, 'name' => 'João']
], 200);
```

---

## ❌ Exemplo — JSON Erro

```php
<?php

use WebTools\Output\Json;

Json::show(null, 404, 'Recurso não encontrado');
```

---

# 📄 XML Output

Classe utilitária para **retornar respostas XML padronizadas**, ideal para integrações legadas e sistemas externos.

---

## 🧪 Exemplo — XML Sucesso

```php
<?php

use WebTools\Output\Xml;

Xml::show([
    'status' => 'success',
    'data' => [
        'id' => 1,
        'name' => 'João'
    ]
], 200);
```

---

## ❌ Exemplo — XML Erro

```php
<?php

use WebTools\Output\Xml;

Xml::show(null, 400, 'Parâmetros inválidos');
```

### Exemplo de resposta XML
```xml
<response>
  <error>
    <message>Parâmetros inválidos</message>
    <code>400</code>
  </error>
</response>
```

---

## 📌 Recursos Principais

- 📦 Autoload PSR-4  
- 📁 Upload organizado por extensão  
- 🌐 Request unificada  
- 🔐 CORS pronto para APIs  
- 📤 JSON Output  
- 📄 XML Output  
- 🧩 Código limpo e orientado a objetos  

---

## 🔮 Roadmap

- 🌐 HTTP Client  
- 📡 API Request Wrapper  
- 🛡️ Validação de dados  
- 🧾 Logger  
- 📁 Download Manager  

---

## 📄 Licença

Licença **MIT**.
