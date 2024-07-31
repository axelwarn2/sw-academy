<?php

namespace Framework\Models;

use Framework\CDatabase;

class Model
{
    protected static string $table;
    protected array $fillable = [];
    protected $db;

    public function __construct()
    {
        $this->db = new CDatabase();
    }

    public function getById(int $id): array
    {
        $query = "SELECT * FROM " . self::$table . " WHERE id = :id";
        $stmt = $this->db->connection->prepare($query);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function getBy(array $criteria): array
    {
        $query = "SELECT * FROM " . static::$table . " WHERE ";
        $conditions = [];
        $params = [];

        foreach ($criteria as $key => $value) {
            $conditions[] = "{$key} = :{$key}";
            $params[$key] = $value;
        }

        $query .= implode(" AND ", $conditions);
        $stmt = $this->db->connection->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function create(array $data): bool
    {
        $fields = array_keys($data);
        $placeholders = array_map(function ($field) {
            return ":{$field}";
        }, $fields);
        $query = "INSERT INTO " . static::$table . " (" . implode(',', $fields) . ") 
        VALUES (" . implode(',', $placeholders) . ")";
        $stmt = $this->db->connection->prepare($query);
        return $stmt->execute($data);
    }

    public function update(int $id, array $data): bool
    {
        $fields = [];
        foreach ($data as $key => $value) {
            $fields[] = "{$key} = :{$key}";
        }

        $query = "UPDATE " . self::$table . " SET " . implode(',', $fields) . " WHERE id = :id";
        $data['id'] = $id;
        $stmt = $this->db->connection->prepare($query);
        return $stmt->execute($data);
    }

    public function delete(int $id): bool
    {
        $query = "DELETE FROM " . self::$table . " WHERE id = :id";
        $stmt = $this->db->connection->prepare($query);
        return $stmt->execute(['id' => $id]);
    }
}
