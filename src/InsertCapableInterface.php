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
     * @param Traversable $data A traversable list of container instances, each containing the data to insert for a
     *                          single record.
     *
     * @return Traversable The list of inserted IDs.
     */
    public function insert($data);
}
