<?php
class User {
    private $userId;
    private $email;
    private $password;
    private $roleId;

    public function __construct($email, $password, $roleId) {
        $this->email = $email;
        $this->password = $password;
        $this->roleId = $roleId;
    }

    public function getUserId() {
        return $this->userId;
    }
    
    public function getEmail() {
        return $this->email;
    }

    
    public function getPassword() {
        return $this->password;
    }

    
    public function getRoleId() {
        return $this->roleId;
    }
}