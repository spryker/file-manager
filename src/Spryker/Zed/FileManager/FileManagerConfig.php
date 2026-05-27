<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\FileManager;

use Spryker\Shared\FileManager\FileManagerConstants;
use Spryker\Zed\Kernel\AbstractBundleConfig;

class FileManagerConfig extends AbstractBundleConfig
{
    /**
     * @var string
     */
    protected const FILE_NAME_VERSION_DELIMITER = '-';

    /**
     * @api
     *
     * @return string
     */
    public function getStorageName()
    {
        return $this->get(FileManagerConstants::STORAGE_NAME);
    }

    /**
     * @api
     *
     * @return string
     */
    public function getFileNameVersionDelimiter()
    {
        return static::FILE_NAME_VERSION_DELIMITER;
    }

    /**
     * Specification:
     * - Returns true if the UUID feature for file entities is enabled.
     * - When enabled, the uuid column and unique index are added to spy_file table.
     *
     * @api
     *
     * @return bool
     */
    public function isUuidEnabled(): bool
    {
        return false;
    }
}
