<?php

return [
    'version' => '1.0.0',
    'production' => false,
    'collections' => [],
    'baseUrl' => getenv('APP_BASE_URL') ?: '',
    'language' => getenv('APP_LANGUAGE') ?: 'pt_BR',
    'title' => getenv('APP_TITLE') ?: 'Repositório Aberto: Trabalho de conclusão de curso',
    'description' => getenv('APP_DESCRIPTION') ?: 'Website description.',
    'imageSocialPreview' => getenv('APP_SOCIAL_PREVIEW'),
    'limarka' => require 'config-limarka.php',
    'files' => require 'files-helper.php'
];
