<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerV6L4ABx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerV6L4ABx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerV6L4ABx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerV6L4ABx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerV6L4ABx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'V6L4ABx',
    'container.build_id' => 'd8a6b2f1',
    'container.build_time' => 1602144819,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerV6L4ABx');