<?php

namespace App\Listeners\helper;

use Exception;
use TightenCo\Jigsaw\IterableObject;

class AppHelper
{
    private const BASE_DIR = __DIR__ . '/../..';
    public const CONFIG_LIMARKA_PATH = self::BASE_DIR . '/configuracao.yaml';
    public const FILES_PATH = self::BASE_DIR . '/source/assets/files';
    public const PAGE_FILES_PATH = self::BASE_DIR . '/source/_pages';

    public function loadConfigYaml(): array
    {
        $yamlFilePath = getenv("LIMARKA_CONFIG_PATH") ?: self::CONFIG_LIMARKA_PATH;

        if (!file_exists($yamlFilePath)) {
            throw new Exception("Não foi possível encontrar o arquivo de configuração para o Limarka");
        }

        $contentData = file_get_contents($yamlFilePath);
        return yaml_parse($contentData) ?: [];
    }

    public function getBuildFilesList(): array
    {
        $data = [];
        $files = scandir(self::FILES_PATH);
        $fileInSafeList = [
            'pdf', 'tex', 'bib'
        ];

        foreach ($files as $file) {
            $filePath = self::FILES_PATH . '/' . $file;
            $path_parts = pathinfo($filePath);

            if (!in_array($path_parts['extension'], $fileInSafeList)) {
                continue;
            }

            $data[] = [
                'file_name' => $path_parts["basename"],
                'path' => 'assets/files/' . $path_parts["basename"],
                'size' => $this->convertFromBytes(filesize($filePath)),
                'type' => mime_content_type($filePath),
            ];
        }

        return $data;
    }

    public function getPageFilesList(): array
    {
        $data = [];
        $files = scandir(self::PAGE_FILES_PATH);
        $fileInSafeList = [
            'md', 'markdown'
        ];

        foreach ($files as $file) {
            $filePath = self::PAGE_FILES_PATH . '/' . $file;
            $path_parts = pathinfo($filePath);

            if (!in_array($path_parts['extension'], $fileInSafeList)) {
                continue;
            }

            $data[] = '_pages.' . $path_parts["filename"];
        }

        return $data;
    }

    public function getPageFilesListFromConfig(IterableObject $files): array
    {
        $data = [];
        $fileInSafeList = [
            'md', 'markdown',
        ];

        foreach ($files as $file) {
            $filePath = self::PAGE_FILES_PATH . '/' . $file;
            $path_parts = pathinfo($filePath);

            if (!in_array($path_parts['extension'], $fileInSafeList)) {
                continue;
            }

            $data[] = '_pages.' . $path_parts["filename"];
        }

        return $data;
    }

    public function getVersion(): string
    {
        $content = file_get_contents(self::BASE_DIR . '/VERSION');
        $version = trim($content);
        return explode(PHP_EOL, $version)[0];
    }

    private function convertFromBytes(int $bytes): string
    {
        $bytes /= 1024;
        if ($bytes >= 1024 * 1024) {
            $bytes /= 1024;
            return number_format($bytes / 1024, 1) . ' GB';
        } elseif ($bytes >= 1024 && $bytes < 1024 * 1024) {
            return number_format($bytes / 1024, 1) . ' MB';
        } else {
            return number_format($bytes, 1) . ' KB';
        }
    }
}