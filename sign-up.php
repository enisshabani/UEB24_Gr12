<?php

class User {
    private $username;
    private $email;
    private $password;
    private $gender;
    private $car;
    private $age;

    public function __construct($username, $email, $password, $gender, $car, $age) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->gender = $gender;
        $this->car = $car;
        $this->age = $age;
    }

    public function getUsername() {
        return $this->username;
    }
    public function setUsername($username) {
        $this->username = $username;
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }
    public function setPassword($password) {
        $this->password = $password;
    }

    public function getGender() {
        return $this->gender;
    }
    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function getCar() {
        return $this->car;
    }
    public function setCar($car) {
        $this->car = $car;
    }

    public function getAge() {
        return $this->age;
    }
    public function setAge($age) {
        $this->age = $age;
    }
}

class Admin extends User {
    private $role;

    public function __construct($username, $email, $password, $gender, $car, $age, $role) {
        parent::__construct($username, $email, $password, $gender, $car, $age);
        $this->role = $role;
    }

    public function getRole() {
        return $this->role === "Yes" ? "Administrator" : "User";
    }

    public function setRole($role) {
        $this->role = $role;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user_name'] ?? '';
    $email = $_POST['user_email'] ?? '';
    $password = $_POST['user_password'] ?? '';
    $gender = $_POST['user_gender'] ?? '';
    $car = $_POST['user_car'] ?? '';
    $age = $_POST['user_age'] ?? '';
    $role = $_POST['user_role'] ?? 'No';

    if ($role === "Yes") {
        $admin = new Admin($username, $email, $password, $gender, $car, $age, $role);
        echo "<h3>Te dhenat e futura (Per admin):</h3>";
        echo "Username: " . htmlspecialchars($admin->getUsername()) . "<br>";
        echo "Email: " . htmlspecialchars($admin->getEmail()) . "<br>";
        echo "Password: " . htmlspecialchars($admin->getPassword()) . "<br>";
        echo "Gender: " . htmlspecialchars($admin->getGender()) . "<br>";
        echo "Car: " . htmlspecialchars($admin->getCar()) . "<br>";
        echo "Age: " . htmlspecialchars($admin->getAge()) . "<br>";
        echo "Role: " . htmlspecialchars($admin->getRole()) . "<br>";
    } else {
        $user = new User($username, $email, $password, $gender, $car, $age);
        echo "<h3>Te dhenat e futura:</h3>";
        echo "Username: " . htmlspecialchars($user->getUsername()) . "<br>";
        echo "Email: " . htmlspecialchars($user->getEmail()) . "<br>";
        echo "Password: " . htmlspecialchars($user->getPassword()) . "<br>";
        echo "Gender: " . htmlspecialchars($user->getGender()) . "<br>";
        echo "Car: " . htmlspecialchars($user->getCar()) . "<br>";
        echo "Age: " . htmlspecialchars($user->getAge()) . "<br>";
    }
}

?>