<?php

declare(strict_types=1);

namespace Conferences\Factory;

use Conferences\Controller\MeetingController;
use Conferences\Repository\MeetingRepository;
use Psr\Container\ContainerInterface;

final class MeetingControllerFactory
{
    public function __invoke(ContainerInterface $container) : MeetingController
    {
        $meetingRepository = $container->get(MeetingRepository::class);

        return new MeetingController($meetingRepository);
    }
}
