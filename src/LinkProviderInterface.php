<?php

declare(strict_types=1);

namespace Psr\Link;

/**
 * A link provider object.
 */
interface LinkProviderInterface
{
    /**
     * Returns an iterable of LinkInterface objects.
     *
     * The iterable may be an array or any PHP \Traversable object. If no links
     * are available, an empty array or \Traversable MUST be returned.
     *
     * @return iterable<LinkInterface>
     */
    public function getLinks(): iterable;

    /**
     * Returns an iterable of LinkInterface objects that have a specific relationship.
     *
     * The iterable may be an array or any PHP \Traversable object. If no links
     * with that relationship are available, an empty array or \Traversable MUST be returned.
     *
     * @param string $rel
     *   The relationship name for which to retrieve links.
     *
     * @return iterable<LinkInterface>
     */
    public function getLinksByRel(string $rel): iterable;
}
