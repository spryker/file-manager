<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerTest\Zed\FileManager\Business\File;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\FileInfoTransfer;
use Generated\Shared\Transfer\FileTransfer;
use Spryker\Zed\FileManager\Business\File\FileRemover;
use Spryker\Zed\FileManager\Business\FileContent\FileContentInterface;
use Spryker\Zed\FileManager\Persistence\FileManagerEntityManagerInterface;
use Spryker\Zed\FileManager\Persistence\FileManagerRepositoryInterface;

/**
 * Auto-generated group annotations
 *
 * @group SprykerTest
 * @group Zed
 * @group FileManager
 * @group Business
 * @group File
 * @group FileRemoverTest
 * Add your own group annotations below this line
 */
class FileRemoverTest extends Unit
{
    /**
     * @return \Spryker\Zed\FileManager\Business\FileContent\FileContentInterface|\PHPUnit\Framework\MockObject\MockObject
     */
    protected function createFileContentMock(): FileContentInterface
    {
        return $this->getMockBuilder(FileContentInterface::class)->getMock();
    }

    /**
     * @return \Spryker\Zed\FileManager\Persistence\FileManagerRepositoryInterface|\PHPUnit\Framework\MockObject\MockObject
     */
    protected function createFileRepositoryMock(): FileManagerRepositoryInterface
    {
        return $this->getMockBuilder(FileManagerRepositoryInterface::class)->getMock();
    }

    /**
     * @return \Spryker\Zed\FileManager\Persistence\FileManagerEntityManagerInterface|\PHPUnit\Framework\MockObject\MockObject
     */
    protected function createFileManagerEntityManagerMock(): FileManagerEntityManagerInterface
    {
        return $this->getMockBuilder(FileManagerEntityManagerInterface::class)->getMock();
    }

    /**
     * @return \Generated\Shared\Transfer\FileTransfer
     */
    protected function getMockedFile(): FileTransfer
    {
        $fileTransfer = new FileTransfer();
        $fileTransfer->setFileName('test.txt');
        $fileTransfer->setIdFile(1);

        return $fileTransfer;
    }

    /**
     * @return \Generated\Shared\Transfer\FileInfoTransfer
     */
    protected function getMockedFileInfo(): FileInfoTransfer
    {
        $fileInfoTransfer = new FileInfoTransfer();
        $fileInfoTransfer->setExtension('txt');
        $fileInfoTransfer->setVersionName('v. 1');
        $fileInfoTransfer->setVersion(1);
        $fileInfoTransfer->setSize(1024);
        $fileInfoTransfer->setStorageFileName('report.txt');

        return $fileInfoTransfer;
    }

    /**
     * @return void
     */
    public function testDelete(): void
    {
        $fileContentMock = $this->createFileContentMock();
        $fileRepositoryMock = $this->createFileRepositoryMock();
        $fileManagerEntityManagerMock = $this->createFileManagerEntityManagerMock();

        $fileRepositoryMock
            ->method('getFileByIdFile')
            ->willReturn($this->getMockedFile());

        $fileContentMock
            ->method('delete')
            ->willReturn(null);

        $fileManagerEntityManagerMock
            ->method('deleteFile')
            ->willReturn(true);

        $fileRemover = new FileRemover(
            $fileRepositoryMock,
            $fileManagerEntityManagerMock,
            $fileContentMock,
            [],
        );

        $this->assertTrue($fileRemover->delete(1));
    }

    /**
     * @return void
     */
    public function testDeleteFileInfo(): void
    {
        $fileContentMock = $this->createFileContentMock();
        $fileRepositoryMock = $this->createFileRepositoryMock();
        $fileManagerEntityManagerMock = $this->createFileManagerEntityManagerMock();

        $fileRepositoryMock
            ->method('getFileInfo')
            ->willReturn($this->getMockedFileInfo());

        $fileContentMock
            ->method('delete')
            ->willReturn(null);

        $fileManagerEntityManagerMock
            ->method('deleteFileInfo')
            ->willReturn(true);

        $fileRemover = new FileRemover(
            $fileRepositoryMock,
            $fileManagerEntityManagerMock,
            $fileContentMock,
            [],
        );

        $this->assertTrue($fileRemover->deleteFileInfo(1));
    }
}
