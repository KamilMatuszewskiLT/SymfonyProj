<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQrje2dt\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQrje2dt/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerQrje2dt.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerQrje2dt\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerQrje2dt\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Qrje2dt',
    'container.build_id' => '833a7dc8',
    'container.build_time' => 1529058833,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerQrje2dt');
