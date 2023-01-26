<?php

namespace movies\Repository;

use PDO;
use movies\Framework\DbConnection;

class MovieRepository
{
    public function db(): PDO
    {
        $instance = DbConnection::getInstance();
        return $instance->getConnection();
    }

    public function getByActorId(int $id): array
    {
        $query = "SELECT f.id, f.title, f.release_year, f.description FROM actor a
                  LEFT JOIN film_actor fa ON a.id = fa.actor_id
                  LEFT JOIN film f ON f.id = fa.film_id
                  WHERE a.id = :id ORDER BY f.release_year;";
        $statement = $this->db()->prepare($query);
        $statement->execute(['id' => $id]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById(int $id): array
    {

        $query = "SELECT f.id, f.title, f.description, f.release_year,
                         f.rental_rate, f.length, f.rating, f.special_features,
                         c.name as category,
                         l.name as language
                  FROM film f
                  LEFT JOIN film_category fc ON f.id = fc.film_id
                  LEFT JOIN category c ON fc.category_id = c.id
                  LEFT JOIN language l ON f.language_id = l.id
                  WHERE f.id = :id;";
        $statement = $this->db()->prepare($query);
        $statement->execute(['id' => $id]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getInventory(int $id): array
    {
        $query = "SELECT f.id, a.address, a.district, ct.name as city, ctr.name as country, COUNT(i.film_id) as stock
                  FROM film f
                  LEFT JOIN inventory i ON f.id = i.film_id
                  LEFT JOIN store s ON i.store_id = s.id
                  LEFT JOIN address a ON s.address_id = a.id
                  LEFT JOIN city ct ON a.city_id = ct.id                
                  LEFT JOIN country ctr ON ct.country_id = ctr.id
                  WHERE f.id = :id
                  GROUP BY s.id                  
                  HAVING stock > 0
                  ;";
        $statement = $this->db()->prepare($query);
        $statement->execute(['id' => $id]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}