<?php

declare(strict_types=1);

namespace ChangHorizon\FileUploader;

interface UploadedFileResultInterface
{
    public function getFileUrl(): string;
}
