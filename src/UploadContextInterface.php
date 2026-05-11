<?php

declare(strict_types=1);

namespace ChangHorizon\FileUploader;

use ChangHorizon\ScopedStorageStrategy\ScopedStorageStrategyInterface;
use ChangHorizon\ValidationInterface\ValidatorInterface;
use Closure;

interface UploadContextInterface
{
    public function getBasePath(): string;

    public function getDirname(): string;

    public function getScope(): ?string;

    public function getStorageStrategy(): ?ScopedStorageStrategyInterface;

    public function getValidator(): ValidatorInterface|Closure|null;

    /**
     * @return null|Closure(string):string
     */
    public function getFilenameCallback(): ?Closure;

    /**
     * @return array<string, mixed>
     */
    public function getOptions(): array;
}
