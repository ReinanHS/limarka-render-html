<?php

use App\Listeners\helper\AppHelper;
use Illuminate\Container\Container;
use Illuminate\Support\Str;
use TightenCo\Jigsaw\Events\EventBus;
use TightenCo\Jigsaw\Jigsaw;

/** @var $container Container */
/** @var $events EventBus */

/**
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */

$events->beforeBuild(function (Jigsaw $jigsaw) {
    $app = new AppHelper();
    $config = $app->loadConfigYaml();

    $filesMap = $config['page_render']['files_map'] ?? [];
    $filesMap = $app->getLinkFileArray($filesMap, $config['title']);
    $jigsaw->setConfig('files_map', $filesMap);

    $jigsaw->setConfig('files', $app->getBuildFilesList(
        fileInSafeList: $config['page_render']['files_type'] ?? [],
        filesMap: $filesMap,
    ));

    $jigsaw->setConfig('version', $app->getVersion());
    $jigsaw->setConfig('limarka', $config);
    $jigsaw->setConfig('title', $config['title']);
    $jigsaw->setConfig('description', Str::limit($config['resumo'], 110));
    $jigsaw->setConfig('page_files', $app->getPageFilesListFromConfig(
        files: $config['page_render']['pages_render'] ?: [],
    ));
});

$events->afterBuild(function (Jigsaw $jigsaw) {
    $buildPath = $jigsaw->getDestinationPath();

    if (is_dir("$buildPath/assets/build/fonts")) {
        shell_exec("mv $buildPath/assets/build/fonts $buildPath/fonts");
    }

    if (file_exists("$buildPath/assets/favicon/favicon.ico")) {
        shell_exec("cp $buildPath/assets/favicon/favicon.ico $buildPath/");
    }

    foreach ($jigsaw->getConfig('files_map') as $file => $link){
        $filePath = "$buildPath/assets/files/$file";
        $linkPath = "$buildPath/assets/files/$link";

        if(file_exists($filePath)){
            shell_exec("mv $filePath $linkPath");
        }
    }
});