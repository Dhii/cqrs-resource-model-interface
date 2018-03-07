<?php

namespace Dhii\Storage\Resource;

use Dhii\Expression\LogicalExpressionInterface;
use Dhii\Storage\Resource\Sql\OrderInterface;
use Psr\Container\ContainerInterface;
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
     * @see   ContainerInterface
     *
     * @param LogicalExpressionInterface|null   $condition An optional condition which, if given, restricts the result
     *                                                     set to records that satisfy this condition.
     * @param OrderInterface[]|Traversable|null $ordering  The ordering, as a list of OrderInterface instances.
     * @param int|null                          $limit     The number of records to limit the query to.
     * @param int|null                          $offset    The number of records to offset by, zero-based.
     *
     * @return ContainerInterface[]|Traversable A list of containers, each containing the data for a single record.
     */
    public function select(
        LogicalExpressionInterface $condition = null,
        $ordering = null,
        $limit = null,
        $offset = null
    );
}
