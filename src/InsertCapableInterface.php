<?php

namespace Dhii\Storage\Resource;

use ArrayAccess;
use Psr\Container\ContainerInterface;
use stdClass;
use Traversable;

/**
 * Something that can insert records into storage.
 *
 * @since [*next-version*]
 */
interface InsertCapableInterface
{
    /**
     * Inserts records into storage.
     *
     * @since [*next-version*]
     *
     * @param array[]|ArrayAccess|stdClass|ContainerInterface|Traversable $records A list of record data containers.
     *
     * @return Traversable The list containing the IDs of the inserted records.
     */
    public function insert($records);
}
