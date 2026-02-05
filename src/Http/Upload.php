<?php

namespace WebTools\Upload;

class Upload
{
    private array $file;
    private array $allowedExtensions;
    private string $baseDir;
    private int $maxSize;

    public function __construct(array $file, string $baseDir = "uploads/", array $allowedExtensions = [], int $maxSize = 0)
    {
        $this->file = $file;
        $this->baseDir = rtrim($baseDir, "/") . "/";
        $this->allowedExtensions = array_map('strtolower', $allowedExtensions);
        $this->maxSize = $maxSize;
    }

    public function upload(): bool
    {
        // Verifica se houve upload
        if ($this->file['error'] !== UPLOAD_ERR_OK) {
            return false;
        }

        // Pega a extensão do arquivo
        $ext = strtolower(pathinfo($this->file['name'], PATHINFO_EXTENSION));

        // Valida extensão permitida (se houver)
        if (!empty($this->allowedExtensions) && !in_array($ext, $this->allowedExtensions)) {
            return false;
        }

        // Valida tamanho (se houver)
        if ($this->maxSize > 0 && $this->file['size'] > $this->maxSize) {
            return false;
        }

        // Cria diretório base
        if (!is_dir($this->baseDir)) {
            mkdir($this->baseDir, 0777, true);
        }

        // Cria diretório por extensão
        $dir = $this->baseDir . $ext . "/";
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        // Define caminho final
        $filename = uniqid() . "." . $ext;
        $destination = $dir . $filename;

        // Move o arquivo
        if (move_uploaded_file($this->file['tmp_name'], $destination)) {
            return true;
        }

        return false;
    }

    public function getUploadedPath(): string
    {
        $ext  = strtolower(pathinfo($this->file['name'], PATHINFO_EXTENSION));
        return $this->baseDir . $ext . "/" . basename($this->file['name']);
    }
}
