<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQAcUFMO\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQAcUFMO/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQAcUFMO.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQAcUFMO\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQAcUFMO\App_KernelDevDebugContainer([
    'container.build_hash' => 'QAcUFMO',
    'container.build_id' => 'ee73eb3b',
    'container.build_time' => 1699628523,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQAcUFMO');
