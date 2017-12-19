<?php

declare(strict_types=1);

namespace Conferences\Collection;

use Conferences\Entity\Attendees;
use ArrayIterator;
use Iterator;
use IteratorIterator;

final class AttendeesCollection extends IteratorIterator implements Iterator
{
    public function __construct(Attendees ...$attendees)
    {
        parent::__construct(new ArrayIterator($attendees));
    }

    public function current() : ?Attendees
    {
        return parent::current();
    }
}
