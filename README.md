# 📦 Web Tools — PHP

Uma coleção de **ferramentas web em PHP** para facilitar **uploads de arquivos, requisições HTTP e utilitários comuns** usados em aplicações web e scripts.

---

## 🧠 Visão Geral

O **Web Tools** é um pacote PHP modular e extensível, criado para agilizar tarefas comuns no desenvolvimento web, oferecendo:

- 📁 Upload de arquivos seguro e organizado  
- 📡 Ferramentas para requisições HTTP  
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

## 🧪 Exemplo de Uso

### 1️⃣ Formulário HTML

```html
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Upload de Arquivo</title>
</head>
<body>

<h2>Enviar Arquivo</h2>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <button type="submit">Enviar</button>
</form>

</body>
</html>
```

---

### 2️⃣ Script PHP

```php
<?php

require 'vendor/autoload.php';

use WebTools\Upload\Upload;

if (!empty($_FILES['file'])) {

    $file = $_FILES['file'];

    $allowedExtensions = ['jpg', 'jpeg', 'png', 'pdf', 'txt'];
    $maxSize = 5 * 1024 * 1024; // 5MB

    $uploader = new Upload(
        $file,
        'uploads/',
        $allowedExtensions,
        $maxSize
    );

    if ($uploader->upload()) {
        echo 'Upload realizado com sucesso!<br>';
        echo 'Arquivo salvo em: ' . htmlspecialchars($uploader->getUploadedPath());
    } else {
        echo 'Erro no upload. Verifique a extensão ou o tamanho do arquivo.';
    }

} else {
    echo 'Nenhum arquivo enviado.';
}
```

---

## 📌 Recursos Principais

- 📁 Organização automática por extensão  
- 🔒 Validação de tamanho e tipo de arquivo  
- 🧩 Código orientado a objetos  
- 📦 Compatível com Composer  
- ⚙️ Fácil integração em qualquer projeto PHP  

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
