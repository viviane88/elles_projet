<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQWlhr9c\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQWlhr9c/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQWlhr9c.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQWlhr9c\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQWlhr9c\App_KernelDevDebugContainer([
    'container.build_hash' => 'QWlhr9c',
    'container.build_id' => 'df8fd282',
    'container.build_time' => 1606644132,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQWlhr9c');
