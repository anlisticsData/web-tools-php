# web-tools-php
Pacote de libs para Php , como Request , uploads ...


# 📦 Web Tools

Uma coleção de ferramentas web em PHP para facilitar requisições HTTP, automações e utilitários.

## 🧠 Visão Geral

Este pacote fornece funcionalidades para trabalhar com requisições HTTP e outros utilitários que podem ser usados em aplicações web ou scripts.

O projeto usa **PSR-4 autoloading** para organizar o código e permite fácil integração com outras bibliotecas PHP.

---

## 🚀 Requisitos

- PHP 7.0 ou superior
- Composer

---

## 📥 Instalação

Se o pacote estiver publicado no **Packagist**, você pode instalar via Composer:

```bash
composer require edilsonclaudino/web-tools





# 📁 Upload Class — WebTools

Uma classe PHP para **fazer upload de arquivos** de forma organizada, salvando cada arquivo em uma **pasta separada por extensão** (ex.: `uploads/jpg`, `uploads/pdf`, etc).

---

## 🎯 Objetivo

Esta classe facilita o upload de arquivos em aplicações PHP, validando extensão e tamanho, criando diretórios automaticamente por extensão e renomeando os arquivos para evitar conflitos.

O formulário e o script recebem o arquivo usando `$_FILES`, a mesma estrutura usada pelos uploads em PHP. :contentReference[oaicite:0]{index=0}

---

## 📦 Instalação

Certifique-se de já ter carregado o **autoload do Composer** no seu projeto:

```bash
composer install


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




<?php

require 'vendor/autoload.php';

use WebTools\Upload\Upload;

// Verifica se veio arquivo pelo formulário
if (!empty($_FILES['file'])) {

    $file = $_FILES['file'];

    // Configurações permitidas
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'pdf', 'txt']; // extensões aceitas
    $maxSize = 5 * 1024 * 1024; // tamanho máximo: 5MB

    // Inicializa a classe de upload
    $uploader = new Upload(
        $file,
        "uploads/",           // diretório base
        $allowedExtensions,   // extensões permitidas
        $maxSize              // tamanho máximo
    );

    // Faz o upload
    if ($uploader->upload()) {
        echo "<p>Upload realizado com sucesso!</p>";
        echo "<p>Caminho do arquivo: " . htmlspecialchars($uploader->getUploadedPath()) . "</p>";
    } else {
        echo "<p>Erro no upload — verifique extensão e tamanho!</p>";
    }

} else {
    echo "<p>Nenhum arquivo foi enviado.</p>";
}


