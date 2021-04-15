<?php 

    class MakesDB {
        public static function get_makes() {
            $db = Database::getDB();
            $query = 'SELECT * FROM makes';
            $statement = $db->prepare($query);
            $statement->execute();
            $makes = $statement->fetchAll();
            $statement->closeCursor();
            return $makes;
        }
    
        public static function get_vehicles_by_make_and_price($make_id) {
            $db = Database::getDB();
            $query = 'SELECT v.vehicle_id, v.year, v.model, v.price, t.type, c.class, m.make FROM vehicles v
                    INNER JOIN classes c 
                    ON c.class_id = v.class_id
                    INNER JOIN types t
                    ON v.type_id = t.type_id
                    INNER JOIN makes m
                    ON m.make_id = v.make_id
                    WHERE m.make_id = :make_id
                    ORDER BY v.price DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':make_id', $make_id);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
            
        }
    
        public static function get_vehicles_by_make_and_year($make_id) {
            $db = Database::getDB();
            $query = 'SELECT v.vehicle_id, v.year, v.model, v.price, t.type, c.class, m.make FROM vehicles v
                    INNER JOIN classes c 
                    ON c.class_id = v.class_id
                    INNER JOIN types t
                    ON v.type_id = t.type_id
                    INNER JOIN makes m
                    ON m.make_id = v.make_id
                    WHERE m.make_id = :make_id
                    ORDER BY v.year DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':make_id', $make_id);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles; 
        }
    
        public static function delete_make($make_id) {
            $db = Database::getDB();
            $query = 'DELETE FROM makes
                      WHERE make_id = :make_id';
            $statement = $db->prepare($query);
            $statement->bindValue(':make_id', $make_id);
            $statement->execute();
            $statement->closeCursor();
        }
    
        public static function add_make($make) {
            $db = Database::getDB();
            $query = 'INSERT INTO makes (make)
                      VALUES (:make)';
            $statement = $db->prepare($query);
            $statement->bindValue(':make', $make);
            $statement->execute();
            $statement->closeCursor();
        }
    }
    