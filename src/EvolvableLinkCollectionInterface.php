<?php
namespace Psr\Http\Link;

/**
 * An evolvable link collection value object.
 */
interface EvolvableLinkCollectionInterface extends LinkCollectionInterface
{
    /**
     * Returns an instance with the specified link included.
     *
     * @param LinkInterface $link
     *   A link object that should be included in this collection.
     *
     * @return self
     */
    public function withLink(LinkInterface $link);
}
