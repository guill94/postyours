<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7qBNKcz\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7qBNKcz/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/Container7qBNKcz.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\Container7qBNKcz\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \Container7qBNKcz\App_KernelTestDebugContainer([
    'container.build_hash' => '7qBNKcz',
    'container.build_id' => '0c12dac6',
    'container.build_time' => 1643630776,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7qBNKcz');