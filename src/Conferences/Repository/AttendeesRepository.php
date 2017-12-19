<?php

declare(strict_types=1);

namespace Conferences\Repository;

use Conferences\Collection\AttendeesCollection;
use Conferences\Entity\Attendees;
use Conferences\Exception\AttendeesNotFoundException;
use PDO;

final class AttendeesRepository
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchAllAttendees() : AttendeesCollection
    {
        $result = $this->pdo->query('SELECT meeting_id, user_id FROM attendees');
        $attendees = [];
        while ($attendees = $result->fetch()) {
            $attendees[] = new Attendees((int)$attendees['meeting_id'],(int)$attendees['user_id']);
        }
        return new AttendeesCollection(...$attendees);
    }

    public function getAttendees(string $attendees_id) : Attendees
    {
        $statement = $this->pdo->prepare('SELECT meeting_id, user_id FROM attendees WHERE user_id = :attendees_id');
        $statement->execute([':attendees_id' => $attendees_id]);
        $attendees = $statement->fetch();
        if (!$attendees) {
            throw new AttendeesNotFoundException();
        }
        return new Attendees((int)$attendees['meeting_id'],(int)$attendees['user_id']);
}
