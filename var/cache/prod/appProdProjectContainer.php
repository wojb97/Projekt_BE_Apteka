<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDhkn6xu\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDhkn6xu/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerDhkn6xu.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerDhkn6xu\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerDhkn6xu\appProdProjectContainer(array(
    'container.build_hash' => 'Dhkn6xu',
    'container.build_id' => '2ded9383',
    'container.build_time' => 1540331388,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerDhkn6xu');