<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8mxynsq\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8mxynsq/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container8mxynsq.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container8mxynsq\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container8mxynsq\appDevDebugProjectContainer(array(
    'container.build_hash' => '8mxynsq',
    'container.build_id' => '634627b3',
    'container.build_time' => 1517838693,
));
