<?php
class User {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }
    public function __destruct() {
    }
    public function getUsername() {
        return $this->username;
    }
    
    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
 } 
class Admin extends User {
    private $role;

    public function __construct($username, $password, $role) {
        parent::__construct($username, $password);
        $this->role = $role;
    }
     public function getRole() {
        return $this->role;
    }

    public function setRole($role) {
        $this->role = $role;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = new User($email, $password);

    echo "<h3>Te dhenat e futura:</h3>";
    echo "Email: " . htmlspecialchars($user->getUsername()) . "<br>";
    echo "Password: " . htmlspecialchars($user->getPassword()) . "<br>";
}
?>


