<?php

declare(strict_types=1);

namespace Conferences\Controller;

use Conferences\Repository\MeetingRepository;



final class CommingMeetingController
{
    /**
     * @var FilmRepository
     */
    private $meetingRepository;

    public function __construct(MeetingRepository $meetingRepository)
    {
        $this->meetingRepository = $meetingRepository;

    }
    public function indexAction() : string
    {
        $meetings = $this->meetingRepository->getCommingMeeting();

        ob_start();
        include __DIR__.'/../../../views/comming-meeting.phtml';
        return ob_get_clean();
    }
}
