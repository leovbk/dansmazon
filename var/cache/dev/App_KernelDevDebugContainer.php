<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOJga875\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOJga875/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOJga875.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOJga875\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOJga875\App_KernelDevDebugContainer([
    'container.build_hash' => 'OJga875',
    'container.build_id' => 'd1146af3',
    'container.build_time' => 1652968356,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOJga875');
