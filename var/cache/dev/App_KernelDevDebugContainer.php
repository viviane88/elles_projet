<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerB6ZxQ2q\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerB6ZxQ2q/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerB6ZxQ2q.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerB6ZxQ2q\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerB6ZxQ2q\App_KernelDevDebugContainer([
    'container.build_hash' => 'B6ZxQ2q',
    'container.build_id' => 'a5e8c0f8',
    'container.build_time' => 1606902556,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerB6ZxQ2q');
