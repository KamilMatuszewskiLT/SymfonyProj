<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDr3t9iu\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDr3t9iu/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerDr3t9iu.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerDr3t9iu\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerDr3t9iu\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Dr3t9iu',
    'container.build_id' => '4fb45818',
    'container.build_time' => 1529045038,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerDr3t9iu');
