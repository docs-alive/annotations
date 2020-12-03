<?php

declare(strict_types=1);

namespace DocsAlive\Annotations;

/**
 * @Annotation
 */
abstract class BaseAnnotation
{
    public string $name;

    public const READ_PROPERTIES = false;
}
