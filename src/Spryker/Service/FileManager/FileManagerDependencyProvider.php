<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Service\FileManager;

use Spryker\Service\FileManager\Dependency\Service\FileManagerToFileSystemBridge;
use Spryker\Service\Kernel\AbstractBundleDependencyProvider;
use Spryker\Service\Kernel\Container;

class FileManagerDependencyProvider extends AbstractBundleDependencyProvider
{
    public const FILE_SYSTEM_SERVICE = 'FILE_SYSTEM_SERVICE';

    /**
     * @param \Spryker\Service\Kernel\Container $container
     *
     * @return \Spryker\Service\Kernel\Container
     */
    public function provideServiceDependencies(Container $container)
    {
        $container = $this->addFileSystemService($container);

        return $container;
    }

    /**
     * @param \Spryker\Service\Kernel\Container $container
     *
     * @return \Spryker\Service\Kernel\Container
     */
    protected function addFileSystemService(Container $container)
    {
        $container[static::FILE_SYSTEM_SERVICE] = function ($container) {
            return new FileManagerToFileSystemBridge(
                $container->getLocator()->fileSystem()->service()
            );
        };

        return $container;
    }
}
