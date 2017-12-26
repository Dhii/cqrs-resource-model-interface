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
     * @param array $records An array of record data sets, each mapping field name to value.
     *
     * @return Traversable The list containing the IDs of the inserted records.
     */
    public function insert(array $records);
}
