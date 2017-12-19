<?php

declare(strict_types=1);

namespace Conferences\Controller;

use Conferences\Repository\AttendeesRepository;

final class AttendeesController
{
    private $attendeesController;

    public function __construct(AttendeesController $attendeesController)
    {
        $this->attendeesController = $attendeesController;

    }
    public function indexAction() : string
    {
        $meetings = $this->attendeesController->fetchAllAttendees();

        ob_start();
        include __DIR__.'/../../../views/meeting.phtml';
        return ob_get_clean();
    }
}
