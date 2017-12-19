<?php

declare(strict_types=1);

namespace Conferences\Factory;

use Conferences\Controller\ShowAttendieesController;
use Conferences\Repository\AttendieesRepository;
use Psr\Container\ContainerInterface;

final class ShowAttendeesControllerFactory
{
    public function __invoke(ContainerInterface $container) : ShowAttendieesController
    {
        $attendieesRepository = $container->get(AttendieesRepository::class);

        return new ShowAttendieesController($attendieesRepository);
    }
}
