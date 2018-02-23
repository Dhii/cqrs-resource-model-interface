<?php

namespace Dhii\Storage\Resource;

use ArrayAccess;
use stdClass;
use Traversable;
use Psr\Container\ContainerInterface;

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
     * @param array[]|stdClass[]|ArrayAccess[]|ContainerInterface[]|stdClass|Traversable $records A list of records data containers.
     *                                                                                            The containers don't all have to be of the same type, as long as they are valid containers.
     *
     * @return Traversable The list containing the IDs of the inserted records.
     */
    public function insert($records);
}
