<?php

namespace Dhii\Storage\Resource;

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
     * @param array|Traversable $records A list of records data containers. Accepted container types are:
     *                                   * array
     *                                   * ArrayAccess
     *                                   * stdClass
     *                                   * Psr\Container\ContainerInterface
     *
     * @return Traversable The list containing the IDs of the inserted records.
     */
    public function insert($records);
}
