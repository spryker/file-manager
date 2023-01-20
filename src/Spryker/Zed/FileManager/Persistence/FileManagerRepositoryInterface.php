<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\FileManager\Persistence;

use Generated\Shared\Transfer\FileCollectionTransfer;
use Generated\Shared\Transfer\FileCriteriaTransfer;
use Generated\Shared\Transfer\MimeTypeTransfer;

interface FileManagerRepositoryInterface
{
    /**
     * @param int $idFile
     *
     * @return \Generated\Shared\Transfer\FileTransfer|null
     */
    public function getFileByIdFile(int $idFile);

    /**
     * @param int $idFileInfo
     *
     * @return \Generated\Shared\Transfer\FileTransfer|null
     */
    public function getFileByIdFileInfo(int $idFileInfo);

    /**
     * @param int $idFileInfo
     *
     * @return \Generated\Shared\Transfer\FileInfoTransfer|null
     */
    public function getFileInfo(int $idFileInfo);

    /**
     * @param int $idFile
     *
     * @return \Generated\Shared\Transfer\FileInfoTransfer|null
     */
    public function getLatestFileInfoByIdFile(int $idFile);

    /**
     * @param int $idFileDirectory
     *
     * @return \Generated\Shared\Transfer\FileDirectoryTransfer|null
     */
    public function getFileDirectory(int $idFileDirectory);

    /**
     * @param int $idFileDirectory
     *
     * @return \ArrayObject<int, \Generated\Shared\Transfer\FileTransfer>
     */
    public function getDirectoryFiles(int $idFileDirectory);

    /**
     * @param int|null $idParentFileDirectory
     *
     * @return \ArrayObject<int, \Generated\Shared\Transfer\FileDirectoryTransfer>
     */
    public function getFileDirectories(?int $idParentFileDirectory = null);

    /**
     * @param int $idMimeType
     *
     * @return \Generated\Shared\Transfer\MimeTypeTransfer|null
     */
    public function getMimeType(int $idMimeType);

    /**
     * @param \Generated\Shared\Transfer\MimeTypeTransfer $mimeTypeTransfer
     *
     * @return \Generated\Shared\Transfer\MimeTypeTransfer|null
     */
    public function getMimeTypeByIdMimeTypeAndName(MimeTypeTransfer $mimeTypeTransfer);

    /**
     * @return \Generated\Shared\Transfer\MimeTypeCollectionTransfer
     */
    public function getAllowedMimeTypes();

    /**
     * @param array<int> $idFiles
     *
     * @return array<\Generated\Shared\Transfer\FileTransfer>
     */
    public function getFilesByIds(array $idFiles): array;

    /**
     * @param int $idFile
     *
     * @return int
     */
    public function getFileInfoVersionsCount(int $idFile): int;

    /**
     * @param \Generated\Shared\Transfer\FileCriteriaTransfer $fileCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\FileCollectionTransfer
     */
    public function getFileCollection(FileCriteriaTransfer $fileCriteriaTransfer): FileCollectionTransfer;
}
