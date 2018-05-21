<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\FileManager\Business\Model;

use Generated\Shared\Transfer\FileManagerDataTransfer;

interface FileSaverInterface
{
    /**
     * @param \Generated\Shared\Transfer\FileManagerDataTransfer $fileManagerDataTransfer
     *
     * @return int
     */
    public function save(FileManagerDataTransfer $fileManagerDataTransfer);
}
