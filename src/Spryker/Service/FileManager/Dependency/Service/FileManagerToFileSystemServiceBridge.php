<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Service\FileManager\Dependency\Service;

use Generated\Shared\Transfer\FileSystemQueryTransfer;
use Generated\Shared\Transfer\FileSystemStreamTransfer;

class FileManagerToFileSystemServiceBridge implements FileManagerToFileSystemServiceInterface
{
    /**
     * @var \Spryker\Service\FileSystem\FileSystemServiceInterface
     */
    protected $fileSystemService;

    /**
     * @param \Spryker\Service\FileSystem\FileSystemServiceInterface $fileSystemService
     */
    public function __construct($fileSystemService)
    {
        $this->fileSystemService = $fileSystemService;
    }

    public function read(FileSystemQueryTransfer $fileSystemQueryTransfer): string
    {
        return $this->fileSystemService->read($fileSystemQueryTransfer);
    }

    public function readStream(FileSystemStreamTransfer $fileSystemStreamTransfer): mixed
    {
        return $this->fileSystemService->readStream($fileSystemStreamTransfer);
    }

    public function getMimeType(FileSystemQueryTransfer $fileSystemQueryTransfer): string
    {
        return $this->fileSystemService->getMimeType($fileSystemQueryTransfer);
    }
}
