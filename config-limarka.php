<?php

use Illuminate\Contracts\Filesystem\FileNotFoundException;

$yamlFile = getenv("LIMARKA_CONFIG_PATH") ?: 'configuracao.yaml';
if (!file_exists($yamlFile)) {
    throw new FileNotFoundException("Não foi possível encontrar o arquivo de configuração para o Limarka");
}

$contentData = file_get_contents($yamlFile);
return yaml_parse($contentData) ?: [];
