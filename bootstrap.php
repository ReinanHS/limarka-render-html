<?php

use App\Listeners\helper\AppHelper;
use TightenCo\Jigsaw\Jigsaw;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

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

    $jigsaw->setConfig('version', $app->getVersion());
    $jigsaw->setConfig('files', $app->getBuildFilesList());
    $jigsaw->setConfig('page_files', $app->getPageFilesList());
    $jigsaw->setConfig('limarka', $app->loadConfigYaml());

    $jigsaw->setConfig('title', $jigsaw->getConfig('limarka')['title']);
});

$events->afterBuild(function (Jigsaw $jigsaw) {
    $buildPath = "build_" . $jigsaw->getEnvironment();
    shell_exec("mv $buildPath/assets/build/fonts $buildPath/fonts");
});