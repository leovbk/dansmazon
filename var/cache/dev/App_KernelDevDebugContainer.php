<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGex31iN\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGex31iN/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGex31iN.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGex31iN\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGex31iN\App_KernelDevDebugContainer([
    'container.build_hash' => 'Gex31iN',
    'container.build_id' => 'e1ae0e7c',
    'container.build_time' => 1653483384,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGex31iN');
