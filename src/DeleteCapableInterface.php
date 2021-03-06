<?php

namespace Dhii\Storage\Resource;

use Dhii\Expression\LogicalExpressionInterface;
use Dhii\Storage\Resource\Sql\OrderInterface;
use Dhii\Util\String\StringableInterface as Stringable;
use stdClass;
use Traversable;

/**
 * Something that can delete records from storage.
 *
 * @since [*next-version*]
 */
interface DeleteCapableInterface
{
    /**
     * Deletes records from storage.
     *
     * @since [*next-version*]
     *
     * @param LogicalExpressionInterface|null            $condition An optional condition which, if specified,
     *                                                              restricts the deletion to records that satisfy this
     *                                                              condition.
     * @param OrderInterface[]|stdClass|Traversable|null $ordering  The ordering, as a list of `OrderInterface`
     *                                                              objects.
     * @param int|float|string|Stringable|null           $limit     The number of records to limit the query to.
     * @param int|float|string|Stringable|null           $offset    The number of records to offset by, zero-based.
     *
     * @return int The number of affected rows.
     */
    public function delete(
        LogicalExpressionInterface $condition = null,
        $ordering = null,
        $limit = null,
        $offset = null
    );
}
