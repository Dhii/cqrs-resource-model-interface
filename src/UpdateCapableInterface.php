<?php

namespace Dhii\Storage\Resource;

use Dhii\Expression\LogicalExpressionInterface;
use Psr\Container\ContainerInterface;
use Traversable;

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
     * @param array                           $changeSet An array of changes, mapping field name to changed value.
     * @param LogicalExpressionInterface|null $condition An optional condition which, if specified, restricts the
     *                                                   affected records to those that satisfy this condition.
     *
     * @return int The number of affected records.
     */
    public function update(array $changeSet, LogicalExpressionInterface $condition = null);
}
