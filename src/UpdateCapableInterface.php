<?php

namespace Dhii\Storage\Resource;

use Dhii\Expression\LogicalExpressionInterface;
use Psr\Container\ContainerInterface;

/**
 * Something that can update records in storage.
 *
 * @since [*next-version*]
 */
interface UpdateCapableInterface
{
    /**
     * Updates the records in storage.
     *
     * @since [*next-version*]
     *
     * @param ContainerInterface         $data      A container of the data mappings to update.
     * @param LogicalExpressionInterface $condition Optional condition which, if specified, restricts the affected
     *                                              records to those that satisfy this condition.
     *
     * @return int The number of affected records.
     */
    public function update(ContainerInterface $data, LogicalExpressionInterface $condition = null);
}
