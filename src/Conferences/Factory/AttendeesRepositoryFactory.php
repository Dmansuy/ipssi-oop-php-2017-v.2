<?php

declare(strict_types=1);

namespace Conferences\Factory;

use Conferences\Repository\AttendeesRepository;
use PDO;
use Psr\Container\ContainerInterface;

final class AttendeesRepositoryFactory
{
    public function __invoke(ContainerInterface $container) : AttendeesRepository
    {
        $pdo = $container->get(PDO::class);

        return new AttendeesRepository($pdo);
    }
}
