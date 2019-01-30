<?php

namespace App\Models;

use PDO;

/**
 * Post Model
 */
class Post extends \Core\Model {

    public static function getAll(){

        try{
            $db = static::getDB();

            $stmt = $db->query('SELECT id, title, content FROM posts ORDER BY created_at');
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);// fetch as an associative array

            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}