<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPU2M1P3\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPU2M1P3/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPU2M1P3.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPU2M1P3\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPU2M1P3\App_KernelDevDebugContainer([
    'container.build_hash' => 'PU2M1P3',
    'container.build_id' => '4d418cbd',
    'container.build_time' => 1653056868,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPU2M1P3');
