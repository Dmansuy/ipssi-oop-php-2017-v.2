<?php

declare(strict_types=1);

namespace Conferences\Factory;

use Conferences\Controller\ShowCommingMeetingController;
use Conferences\Repository\MeetingRepository;
use Psr\Container\ContainerInterface;

final class ShowCommingMeetingControllerFactory
{
    public function __invoke(ContainerInterface $container) : ShowCommingMeetingController
    {
        $meetingRepository = $container->getCommingMeeting(MeetingRepository::class);

        return new ShowCommingMeetingController($meetingRepository);
    }
}
