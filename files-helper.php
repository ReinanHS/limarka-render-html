<?php

$path = './source/assets/files';
$files = scandir($path);
$data = [];
foreach ($files as $file) {
    if ($file == '.' || $file == '..' || $file == '.gitignore') {
        continue;
    }

    $filePath = "$path/$file";
    $path_parts = pathinfo($filePath);

    $data[] = [
        'arquivo' => $path_parts["basename"],
        'link' => 'assets/files/' . $path_parts["basename"],
        'tamanho' => formatBytes(filesize($filePath)),
        'tipo' => mime_content_type($filePath),
    ];
}

function formatBytes($bytes, $precision = 2): string
{
    $units = array('B', 'KB', 'MB', 'GB', 'TB');

    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);

    return round($bytes, $precision) . ' ' . $units[$pow];
}

return $data;