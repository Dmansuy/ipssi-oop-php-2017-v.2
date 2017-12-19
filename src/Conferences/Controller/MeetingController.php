<?php

declare(strict_types=1);

namespace Conferences\Controller;

use Conferences\Repository\MeetingRepository;

final class MeetingController
{
    private $meetingRepository;

    public function __construct(MeetingRepository $meetingRepository)
    {
        $this->meetingRepository = $meetingRepository;

    }
    public function indexAction() : string
    {
        $meetings = $this->meetingRepository->fetchAll();

        ob_start();
        include __DIR__.'/../../../views/meeting.phtml';
        return ob_get_clean();
    }
}
