<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSIwB7Dr\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSIwB7Dr/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSIwB7Dr.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSIwB7Dr\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSIwB7Dr\App_KernelDevDebugContainer([
    'container.build_hash' => 'SIwB7Dr',
    'container.build_id' => '8ffbf952',
    'container.build_time' => 1700035796,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSIwB7Dr');
