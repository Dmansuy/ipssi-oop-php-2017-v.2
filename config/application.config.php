<?php

use Application\Controller\IndexController;
use Application\Controller\LecturerController;
use Application\Factory\DateTimeImmutableFactory;
use Application\Factory\DbConfigProviderFactory;
use Application\Factory\IndexControllerFactory;
use Application\Factory\LecturerControllerFactory;
use Application\Factory\LecturerRepositoryFactory;
use Application\Factory\ParseUriHelperFactory;
use Application\Factory\PdoConnectionFactory;
use Application\Factory\RouterFactory;
use Application\Provider\DbConfigProvider;
use Application\Repository\LecturerRepository;
use Application\Router\ParseUriHelper;
use Application\Router\Router;
use Cinema\Controller\FilmController;
use Cinema\Controller\ShowFilmController;
use Cinema\Factory\FilmControllerFactory;
use Cinema\Factory\FilmRepositoryFactory;
use Cinema\Factory\ShowFilmControllerFactory;
use Cinema\Repository\FilmRepository;
use Conferences\Controller\MeetingController;
use Conferences\Controller\ShowMeetingController;
use Conferences\Factory\MeetingControllerFactory;
use Conferences\Factory\MeetingRepositoryFactory;
use Conferences\Factory\ShowMeetingControllerFactory;
use Conferences\Repository\MeetingRepository;
use Conferences\Controller\CommingMeetingController;
use Conferences\Factory\CommingMeetingControllerFactory;
use Conferences\Controller\ShowCommingMeetingController;
use Conferences\Factory\ShowCommingMeetingControllerFactory;

use Conferences\Repository\AttendeesRepository;
use Conferences\Controller\AttendeesController;
use Conferences\Factory\AttendeesControllerFactory;
use Conferences\Controller\ShowAttendeesController;
use Conferences\Factory\ShowAttendeesControllerFactory;

use Conferences\Repository\OrganisersRepository;
use Conferences\Controller\OrganisersController;
use Conferences\Factory\OrganisersControllerFactory;
use Conferences\Controller\ShowOrganisersController;
use Conferences\Factory\ShowOrganisersControllerFactory;



return [
    'factories' => [
        // Configuration du "framework applicatif"
        ParseUriHelper::class => ParseUriHelperFactory::class,
        Router::class => RouterFactory::class,
        PDO::class => PdoConnectionFactory::class,
        DbConfigProvider::class => DbConfigProviderFactory::class,

        // Configurations liées aux lecturers
        DateTimeInterface::class => DateTimeImmutableFactory::class,
        LecturerController::class => LecturerControllerFactory::class,
        IndexController::class => IndexControllerFactory::class,
        LecturerRepository::class => LecturerRepositoryFactory::class,

        // Configurations liées aux films
        FilmController::class => FilmControllerFactory::class,
        ShowFilmController::class => ShowFilmControllerFactory::class,
        FilmRepository::class => FilmRepositoryFactory::class,

        // Configurations liées aux meetings
        MeetingController::class => MeetingControllerFactory::class,
        ShowMeetingController::class => ShowMeetingControllerFactory::class,
        MeetingRepository::class => MeetingRepositoryFactory::class,

        // Configurations liées aux meetings à venir
        CommingMeetingController::class => CommingMeetingControllerFactory::class,
        ShowCommingMeetingController::class => ShowCommingMeetingControllerFactory::class,
        MeetingRepository::class => MeetingRepositoryFactory::class,

        // Configurations liées aux attendees
        AttendieesController::class => AttendeesControllerFactory::class,
        ShowAttendeesController::class => ShowAttendeesControllerFactory::class,
        AttendeesRepository::class => AttendeesRepositoryFactory::class,

        // Configurations liées aux organisers
        OrganisersController::class => OrganisersControllerFactory::class,
        ShowOrganisersController::class => ShowOrganisersControllerFactory::class,
        OrganisersRepository::class => OrganisersRepositoryFactory::class,

    ],
];
