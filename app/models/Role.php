<?php
class Role {
    private $roleId;
    private $roleName;

    public function __construct($roleName) {
        $this->roleName = $roleName;

    }

    public function getRoleName() {
        return $this->roleName;
    }

    public function setRoleName($roleName) {
        $this->roleName = $roleName;
    }

    private function create_user() {
        $database = new Database();
        $pdo = $database->getConnection();
        $query = "INSERT INTO roles (roleName) VALUES (:role_name)";
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(':role_name', $this->roleName);
        $stmt->execute();
    }
}