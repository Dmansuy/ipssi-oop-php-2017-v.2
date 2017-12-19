<?php

declare(strict_types=1);

namespace Conferences\Controller;

use Conferences\Repository\OrganisersRepository;

final class OrganisersController
{
    private $organisersController;

    public function __construct(OrganisersController $organisersController)
    {
        $this->organisersController = $organisersController;

    }
    public function indexAction() : string
    {
        $meetings = $this->organisersController->fetchAllOrganisers();

        ob_start();
        include __DIR__.'/../../../views/meeting.phtml';
        return ob_get_clean();
    }
}
