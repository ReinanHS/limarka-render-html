<?php

return [
    'production' => false,
    'collections' => [],
    'baseUrl' => getenv('APP_BASE_URL') ?: '',
    'language' => getenv('APP_LANGUAGE') ?: 'pt_BR',
    'description' => getenv('APP_DESCRIPTION') ?: 'Esse site é responsável por armazenar um arquivo de TCC',
    'github.user' => getenv('GITHUB_REPOSITORY_OWNER'),
    'github.repository' => getenv('GITHUB_REPOSITORY'),
];
