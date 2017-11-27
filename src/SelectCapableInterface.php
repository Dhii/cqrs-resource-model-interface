<?php

namespace Dhii\Storage\Resource;

use Dhii\Expression\LogicalExpressionInterface;
use Traversable;

/**
 * Something that can select specific records from storage.
 *
 * @since [*next-version*]
 */
interface SelectCapableInterface
{
    /**
     * Retrieves records from storage.
     *
     * @since [*next-version*]
     *
     * @see ContainerInterface
     *
     * @param LogicalExpressionInterface $condition Optional condition which, if given, restricts the result set to
     *                                              records that satisfy this condition.
     *
     * @return Traversable A list of container instances, each containing the data for a single record.
     */
    public function select(LogicalExpressionInterface $condition = null);
}
