<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPmjruw4\appDevProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPmjruw4/appDevProjectContainer.php') {
    touch(__DIR__.'/ContainerPmjruw4.legacy');

    return;
}

if (!\class_exists(appDevProjectContainer::class, false)) {
    \class_alias(\ContainerPmjruw4\appDevProjectContainer::class, appDevProjectContainer::class, false);
}

return new \ContainerPmjruw4\appDevProjectContainer(array(
    'container.build_hash' => 'Pmjruw4',
    'container.build_id' => '06fc9746',
    'container.build_time' => 1529311457,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerPmjruw4');
