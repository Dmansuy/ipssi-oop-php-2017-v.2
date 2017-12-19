<?php

declare(strict_types=1);

namespace Conferences\Repository;

use Conferences\Collection\OrganisersCollection;
use Conferences\Entity\Organisers;
use Conferences\Exception\OrganisersNotFoundException;
use PDO;

final class OrganisersRepository
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchAllOrganisers() : OrganisersCollection
    {
        $result = $this->pdo->query('SELECT meeting_id, user_id FROM organisers');
        $organisers = [];
        while ($organisers = $result->fetch()) {
            $organisers[] = new Attendees((int)$oganisers['meeting_id'],(int)$organisers['user_id']);
        }
        return new OrganisersCollection(...$organisers);
    }

    public function getOrganisers(string $organisers_id) : Organisers
    {
        $statement = $this->pdo->prepare('SELECT meeting_id, user_id FROM organisers WHERE user_id = :organisers_id');
        $statement->execute([':organisers_id' => $organisers_id]);
        $organisers = $statement->fetch();
        if (!$organisers) {
            throw new OrganisersNotFoundException();
        }
        return new Organisers((int)$organisers['meeting_id'],(int)$organisers['user_id']);
}
