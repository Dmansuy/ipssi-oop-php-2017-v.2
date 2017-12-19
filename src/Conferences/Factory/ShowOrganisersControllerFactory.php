<?php

declare(strict_types=1);

namespace Conferences\Factory;

use Conferences\Controller\ShowOrganisersController;
use Conferences\Repository\OrganisersRepository;
use Psr\Container\ContainerInterface;

final class ShowOrganisersControllerFactory
{
    public function __invoke(ContainerInterface $container) : ShowOrganisersController
    {
        $organisersRepository = $container->get(OrganisersRepository::class);

        return new ShowOrganisersController($organisersRepository);
    }
}
