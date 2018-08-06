 <? public static function writeComment($id, $name, $comment) {
            $db = Database::getConnection();
            $sql = 'INSERT INTO comments (name, comment, comics_id) VALUES (:name, :comment, :comics_id)';
            $result = $db->prepare($sql);
            $result->bindParam(':name', $name, PDO::PARAM_STR);
            $result->bindParam(':comment', $comment, PDO::PARAM_STR);
            $result->bindParam(':comics_id', $id, PDO::PARAM_INT);
            if ($result->execute()) {
                return $db->lastInsertId();
            }
            return 0;
        }

    }?>