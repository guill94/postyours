<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEke5iec\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEke5iec/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEke5iec.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEke5iec\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEke5iec\App_KernelDevDebugContainer([
    'container.build_hash' => 'Eke5iec',
    'container.build_id' => 'f7d89cdf',
    'container.build_time' => 1643630021,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEke5iec');