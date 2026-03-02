<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\FileManager\Dependency\Service;

use Generated\Shared\Transfer\FileSystemContentTransfer;
use Generated\Shared\Transfer\FileSystemCopyTransfer;
use Generated\Shared\Transfer\FileSystemCreateDirectoryTransfer;
use Generated\Shared\Transfer\FileSystemDeleteDirectoryTransfer;
use Generated\Shared\Transfer\FileSystemDeleteTransfer;
use Generated\Shared\Transfer\FileSystemListTransfer;
use Generated\Shared\Transfer\FileSystemQueryTransfer;
use Generated\Shared\Transfer\FileSystemRenameTransfer;
use Generated\Shared\Transfer\FileSystemStreamTransfer;
use Generated\Shared\Transfer\FileSystemVisibilityTransfer;

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

    public function getMimeType(FileSystemQueryTransfer $fileSystemQueryTransfer): string
    {
        return $this->fileSystemService->getMimeType($fileSystemQueryTransfer);
    }

    public function getTimestamp(FileSystemQueryTransfer $fileSystemQueryTransfer): ?int
    {
        return $this->fileSystemService->getTimestamp($fileSystemQueryTransfer);
    }

    public function getSize(FileSystemQueryTransfer $fileSystemQueryTransfer): int
    {
        return $this->fileSystemService->getSize($fileSystemQueryTransfer);
    }

    public function isPrivate(FileSystemQueryTransfer $fileSystemQueryTransfer): bool
    {
        return $this->fileSystemService->isPrivate($fileSystemQueryTransfer);
    }

    public function read(FileSystemQueryTransfer $fileSystemQueryTransfer): string
    {
        return $this->fileSystemService->read($fileSystemQueryTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\FileSystemListTransfer $fileSystemListTransfer
     *
     * @return array<\Generated\Shared\Transfer\FileSystemResourceTransfer>
     */
    public function listContents(FileSystemListTransfer $fileSystemListTransfer): array
    {
        return $this->fileSystemService->listContents($fileSystemListTransfer);
    }

    public function has(FileSystemQueryTransfer $fileSystemQueryTransfer): bool
    {
        return $this->fileSystemService->has($fileSystemQueryTransfer);
    }

    public function markAsPrivate(FileSystemVisibilityTransfer $fileSystemVisibilityTransfer): void
    {
        $this->fileSystemService->markAsPrivate($fileSystemVisibilityTransfer);
    }

    public function markAsPublic(FileSystemVisibilityTransfer $fileSystemVisibilityTransfer): void
    {
        $this->fileSystemService->markAsPublic($fileSystemVisibilityTransfer);
    }

    public function createDirectory(FileSystemCreateDirectoryTransfer $fileSystemCreateDirectoryTransfer): void
    {
        $this->fileSystemService->createDirectory($fileSystemCreateDirectoryTransfer);
    }

    public function deleteDirectory(FileSystemDeleteDirectoryTransfer $fileSystemDeleteDirectoryTransfer): void
    {
        $this->fileSystemService->deleteDirectory($fileSystemDeleteDirectoryTransfer);
    }

    public function copy(FileSystemCopyTransfer $fileSystemCopyTransfer): void
    {
        $this->fileSystemService->copy($fileSystemCopyTransfer);
    }

    public function delete(FileSystemDeleteTransfer $fileSystemDeleteTransfer): void
    {
        $this->fileSystemService->delete($fileSystemDeleteTransfer);
    }

    public function rename(FileSystemRenameTransfer $fileSystemRenameTransfer): void
    {
        $this->fileSystemService->rename($fileSystemRenameTransfer);
    }

    public function write(FileSystemContentTransfer $fileSystemContentTransfer): void
    {
        $this->fileSystemService->write($fileSystemContentTransfer);
    }

    public function readStream(FileSystemStreamTransfer $fileSystemStreamTransfer): mixed
    {
        return $this->fileSystemService->readStream($fileSystemStreamTransfer);
    }

    public function writeStream(FileSystemStreamTransfer $fileSystemStreamTransfer, mixed $stream): void
    {
        $this->fileSystemService->writeStream($fileSystemStreamTransfer, $stream);
    }
}
