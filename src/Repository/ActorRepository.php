<?php
declare(strict_types=1);

namespace movies\Repository;

use PDO;
use movies\Framework\DbConnection;

class ActorRepository
{
    public function db(): PDO
    {
        $instance = DbConnection::getInstance();
        return $instance->getConnection();
    }

    public function getAll(): array
    {
        $query = "SELECT first_name, last_name, id FROM actor ORDER BY last_name, first_name;";
        $statement = $this->db()->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSearchResult(string $searchString): array
    {
        $searchQuery = "%$searchString%";
        $query = "SELECT first_name, last_name, id FROM actor 
                  WHERE first_name LIKE :searchQuery
                     OR last_name LIKE :searchQuery
                  ORDER BY last_name, first_name ;";
        $statement = $this->db()->prepare($query);
        $statement->execute(['searchQuery' => stripslashes($searchQuery)]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById(int $id): array
    {
        $query = "SELECT id, first_name, last_name FROM actor
                  WHERE id = :id;";
        $statement = $this->db()->prepare($query);
        $statement->execute(['id' => $id]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getActorsByMovieId(int $id): array
    {
        $query = "SELECT a.id, a.first_name, a.last_name FROM actor a
                  RIGHT JOIN film_actor fa ON a.id = fa.actor_id
                  RIGHT JOIN film f ON fa.film_id = f.id
                  WHERE f.id = :id;";
        $statement = $this->db()->prepare($query);
        $statement->execute(['id' => $id]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getActorsJson(string $searchString): string
    {

        $searchQuery = "%$searchString%";
        if (isset($searchString) && strlen($searchString) >= 1) {
            $query = "SELECT first_name, last_name, id FROM actor 
                  WHERE first_name LIKE :searchQuery
                     OR last_name LIKE :searchQuery
                  ORDER BY last_name, first_name ;";
            $statement = $this->db()->prepare($query);
            $statement->execute(['searchQuery' => stripslashes($searchQuery)]);
            return json_encode($statement->fetchAll(PDO::FETCH_ASSOC));
        } else {
            return json_encode($this->getAll());
        }
    }
}

