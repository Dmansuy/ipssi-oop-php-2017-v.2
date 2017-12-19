<?php

declare(strict_types=1);

namespace Conferences\Controller;

use Application\Controller\ErrorController;
use Conferences\Exception\AttendeesNotFoundException;
use Conferences\Repository\AttendeesRepository;

final class ShowAttendeesController
{
    
    private $attendeesRepository;

    public function __construct(AttendeesRepository $attendeesRepository)
    {
        $this->attendeesRepository = $attendeesRepository;
    }

    public function indexAction() : int
    {
        try {
            $attendees = $this->attendeesRepository->get($_GET['user_id'] ?? '');

            ob_start();
            include __DIR__.'/../../../views/meeting-details.phtml';
            return ob_get_clean();
        } catch (AttendeesNotFoundException $exception) {
            return (new ErrorController($exception))->error404Action();
        }
    }
}
