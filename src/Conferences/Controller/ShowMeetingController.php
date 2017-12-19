<?php

declare(strict_types=1);

namespace Conferences\Controller;

use Application\Controller\ErrorController;
use Conferences\Exception\MeetingNotFoundException;
use Conferences\Repository\MeetingRepository;

final class ShowMeetingController
{
    
    private $meetingRepository;

    public function __construct(MeetingRepository $meetingRepository)
    {
        $this->meetingRepository = $meetingRepository;
    }

    public function indexAction() : string
    {
        try {
            $meeting = $this->meetingRepository->get($_GET['title'] ?? '');

            ob_start();
            include __DIR__.'/../../../views/meeting-details.phtml';
            return ob_get_clean();
        } catch (MeetingNotFoundException $exception) {
            return (new ErrorController($exception))->error404Action();
        }
    }
}
