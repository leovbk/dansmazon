<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX9a3TpS\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX9a3TpS/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerX9a3TpS.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerX9a3TpS\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerX9a3TpS\App_KernelDevDebugContainer([
    'container.build_hash' => 'X9a3TpS',
    'container.build_id' => '8b706eb3',
    'container.build_time' => 1653377984,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerX9a3TpS');
