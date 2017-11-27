<?php

namespace Dhii\Storage\Resource;

use Dhii\Expression\LogicalExpressionInterface;

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
     * @param LogicalExpressionInterface|null $condition An optional condition which, if specified, restricts the
     *                                                   deletion to records that satisfy this condition.
     *
     * @return int The number of affected rows.
     */
    public function delete(LogicalExpressionInterface $condition = null);
}
