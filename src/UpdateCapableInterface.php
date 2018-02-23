<?php

namespace Dhii\Storage\Resource;

use Dhii\Util\String\StringableInterface as Stringable;
use Dhii\Expression\LogicalExpressionInterface;
use Dhii\Expression\TermInterface;
use stdClass;
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
     * @param int[]|float[]|string[]|Stringable|bool[]|TermInterface[]|Traversable|stdClass $changeSet The change set, mapping field names to their new values.
     *                                                                                                 The values don't have to be all of the same type.
     * @param LogicalExpressionInterface|null                                               $condition An optional condition which, if specified, restricts the
     *                                                                                                 affected records to those that satisfy this condition.
     *
     * @return int The number of affected records.
     */
    public function update($changeSet, LogicalExpressionInterface $condition = null);
}
