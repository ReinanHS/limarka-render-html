<?php

namespace App\Listeners\helper;

use Exception;

class RenderConfigHelper
{
    private const BASE_DIR = __DIR__ . '/../../source';

    private function getCheckImport(string $context): false|string
    {
        if (!str_contains($context, '@import(') || !str_contains($context, ')')) {
            return false;
        }

        $pos1 = strpos($context, '(');
        $pos2 = strpos($context, ')');
        $length = abs($pos1 - $pos2);

        $startIndex = min($pos1, $pos2);

        $importFilename = substr($context, $startIndex, $length);
        return str_replace(['(', ')', "'", '"'], '', $importFilename);
    }

    private function getContentFromString(string $value): string
    {
        $importFilename = $this->getCheckImport($value);
        if (!$importFilename) {
            return $value;
        }

        $importFilename = str_replace('pages', '_pages', $importFilename);
        $filePath = self::BASE_DIR . '/' . $importFilename;

        if (!file_exists($filePath)) {
            throw new Exception("O Arquivo $filePath não existe");
        }

        $content = file_get_contents($filePath);
        if (pathinfo($filePath)["extension"] == 'md') {
            $content = preg_replace('/#.*/', '', $content);
            $content = trim($content);
        }

        return $content;
    }

    public function configParse(array $config): array
    {
        $keysFind = ['resumo', 'resumen', 'resume', 'abstract_texto', 'proposito', 'agradecimentos', 'dedicatoria'];

        foreach ($keysFind as $key) {
            try {
                $config[$key] = $this->getContentFromString($config[$key]);
            } catch (Exception $e) {
                $config[$key] = $e->getMessage();
            }
        }

        return $config;
    }

    public static function getInstance(): self
    {
        return new RenderConfigHelper();
    }
}