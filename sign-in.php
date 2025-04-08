<?php
class User {
    private $email;
    private $password;

    public function __construct($e, $p){
        $this -> email = $e;
        $this -> password = $p;        
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Create a new User object with the submitted email and password
    $obj = new User($email, $password);

    // Display the email and password
    echo "Email: " . htmlspecialchars($obj->getEmail());
    echo "<br>";
    echo "Password: " . htmlspecialchars($obj->getPassword());
}
?>