<?php

declare(strict_types=1);

namespace Conferences\Entity;

final class Meeting
{

    private $id;

    private $title;

    private $description;

    private $startDate;

    private $endDate;
 
    private $community_id;

    public function __construct(int $id, string $title, string $description, \DateTimeImmutable $startDate, \DateTimeImmutable $endDate, int $community_id)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->community_id = $community_id;

    }

    /*public function getMeetingDetails() : string
    {
        return "{$this->id} {$this->title} {$this->description} {$this->community_id}";
    }

    public function slugifiedName() : string
    {
        return $this->slugify($this->getMeeting());
    }

    public function getDateOfMeeting() : \DateTimeImmutable
    {
        return " {$this->startDate} {$this->endDate} ";
    }*/

    public function getMeetingId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getStartDateMeeting() : \DateTimeImmutable
    {
        return $this->startDate;
    }

    public function getEndDateMeeting() : \DateTimeImmutable
    {
        return $this->endDate;
    }

    public function getCommunity_id(): int
    {
        return $this->community_id;
    }


    /*public function duree() : \DateTime
    {
        dureeMeeting = startDate - endDate;
        return dureeMeeting;
    }*/
}
