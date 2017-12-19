<?php

declare(strict_types=1);

namespace Conferences\Controller;

use Application\Controller\ErrorController;
use Conferences\Exception\OrganisersNotFoundException;
use Conferences\Repository\OrganisersRepository;

final class ShowOrganisersController
{
    
    private $arganisersRepository;

    public function __construct(OrganisersRepository $organisersRepository)
    {
        $this->organisersRepository = $organisersRepository;
    }

    public function indexAction() : int
    {
        try {
            $meeting = $this->organisersRepository->get($_GET['user_id'] ?? '');

            ob_start();
            include __DIR__.'/../../../views/meeting-details.phtml';
            return ob_get_clean();
        } catch (OrganisersNotFoundException $exception) {
            return (new ErrorController($exception))->error404Action();
        }
    }
}
