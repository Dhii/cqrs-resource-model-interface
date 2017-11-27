<?php

namespace Dhii\Storage\Resource;

use Psr\Container\ContainerInterface;
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
     * @param ContainerInterface[]|Traversable $data A traversable list of container instances, each containing the
     *                                               data to for a single record.
     *
     * @return Traversable The list containing the IDs of the inserted records.
     */
    public function insert($data);
}
