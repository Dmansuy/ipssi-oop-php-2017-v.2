<?php

declare(strict_types=1);

namespace Conferences\Factory;

use Conferences\Controller\AttendeesController;
use Conferences\Repository\AttendeesRepository;
use Psr\Container\ContainerInterface;

final class AttendeesControllerFactory
{
    public function __invoke(ContainerInterface $container) : AttendeesController
    {
        $attendeesRepository = $container->get(AttendeesRepository::class);

        return new AttendeesController($attendeesRepository);
    }
}
