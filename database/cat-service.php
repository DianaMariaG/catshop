<?php 

class CatService {
    private mysqli $conn;

    public function __construct(Database $db){
        $this->conn = $db->getConnection();
    }

    public function adopt_cat(History $history): bool {
        return $this->create_history_entry($history) && $this->update_cat_status($history->cat_id);
    }

    public function get_adopted_cats_by_user(int $user_id): mysqli_result {
        $statement = $this->conn->prepare("SELECT c.*, h.purchase_date FROM cat c INNER JOIN history h ON h.cat_id = c.id WHERE h.user_id = ?");
        $statement->bind_param("i",$user_id);
        $statement->execute();
        return $statement->get_result();
    }

    private function create_history_entry(History $history): bool {
        $statement = $this->conn->prepare("INSERT INTO history(cat_id, user_id, purchase_date) VALUES (?,?,?) ");
        $statement->bind_param("iis",$history->cat_id, $history->user_id, $history->purchase_date);
        return $statement->execute();
    }

    private function update_cat_status(int $cat_id): bool {
        $statement = $this->conn->prepare("UPDATE cat SET status=? WHERE id = ?");
        $status = 'ADOPTED';
        $statement->bind_param("si", $status, $cat_id);
        return $statement->execute();
    }

}

?>