<?php

declare(strict_types=1);

namespace Conferences\Collection;

use Conferences\Entity\Organisers;
use ArrayIterator;
use Iterator;
use IteratorIterator;

final class OrganisersCollection extends IteratorIterator implements Iterator
{
    public function __construct(Organisers ...$organisers)
    {
        parent::__construct(new ArrayIterator($organisers));
    }

    public function current() : ?Organisers
    {
        return parent::current();
    }
}
