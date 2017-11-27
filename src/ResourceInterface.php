<?php

namespace Dhii\Storage\Resource;

/**
 * Something that represents a storage resource.
 *
 * @since [*next-version*]
 */
interface ResourceInterface extends
    SelectCapableInterface,
    InsertCapableInterface,
    UpdateCapableInterface,
    DeleteCapableInterface
{
}
