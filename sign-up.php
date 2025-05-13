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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Montserrat", sans-serif;
        }
        
        body {
            width: 100%;
            min-height: 100vh;
            padding: 20px;
            display: flex;
            background: #fe5b3d;
            justify-content: center;
            align-items: center;
        }
          
        form {
            width: 100%;
            max-width: 435px;
            background: #fff;
            border-radius: 6px;
            padding: 41px 30px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
          
        h1 {
            margin: 0 0 30px 0;
            text-align: center;
        }
          
          input[type="text"],
          input[type="password"],
          input[type="date"],
          input[type="datetime"],
          input[type="email"],
          input[type="number"],
          input[type="search"],
          input[type="tel"],
          input[type="time"],
          input[type="url"],
          textarea,
          
          select {
            background: rgba(255,255,255,0.1);
            border: none;
            font-size: 16px;
            height: auto;
            margin: 0;
            outline: 0;
            padding: 15px;
            width: 100%;
            background-color: #e8eeef;
            color: #8a97a0;
            box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
            margin-bottom: 30px;
          }
          
          input[type="radio"],
          input[type="checkbox"] {
            margin: 0 4px 8px 0;
          }
          
          select {
            padding: 6px;
            height: 32px;
            border-radius: 2px;
          }
          
          button {
            padding: 19px 39px 18px 39px;
            color: #FFF;
            background-color: black;
            font-size: 18px;
            text-align: center;
            font-style: normal;
            border-radius: 5px;
            width: 100%;
            border: 1px solid black;
            border-width: 1px 1px 3px;
            box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
            margin-bottom: 10px;
          }
          button:hover{
            background-color: orange;
            border: 1px solid orange;
          }
          
          fieldset {
            margin-bottom: 30px;
            border: none;
          }
          
          legend {
            font-size: 1.4em;
            margin-bottom: 10px;
          }
          
          label {
            display: block;
            margin-bottom: 8px;
          }
          
          label.light {
            font-weight: 300;
            display: inline;
          }
          
          .number {
            background-color: #fe5b3d;
            color: #fff;
            height: 30px;
            width: 30px;
            display: inline-block;
            font-size: 0.8em;
            margin-right: 4px;
            line-height: 30px;
            text-align: center;
            text-shadow: 0 1px 0 rgba(255,255,255,0.2);
            border-radius: 100%;
          }
          
          @media screen and (min-width: 480px) {
          
            form {
              max-width: 480px;
            }
          
          }
    </style>
</head>
<body>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];

    // Email regex validation
    if (!preg_match(
        '/^[a-zA-Z0-9-.]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/',
        $email
    )) {
        echo "Email adresa nuk është valide.<br>";
    } else {
        echo "Email adresa është valide.<br>";
    }

    // Password regex validation
    // Check if password contains only letters
    if (preg_match('/^[a-zA-Z]+$/', $password)) {
        echo "Fjalëkalimi përmban vetëm shkronja. Ju lutem shtoni numra.<br>";
    }
    // Check if password contains only numbers
    elseif (preg_match('/^[0-9]+$/', $password)) {
        echo "Fjalëkalimi përmban vetëm numra. Ju lutem shtoni shkronja.<br>";
    }
    // Check if password contains both letters and numbers
    elseif (preg_match('/^[a-zA-Z0-9]+$/', $password)) {
        echo "Fjalëkalimi është valide (përmban shkronja dhe numra).<br>";
        // Add further processing logic here if needed
    } else {
        echo "Fjalëkalimi nuk është valide. Përdorni vetëm shkronja dhe numra.<br>";
    }
}

      <form action="sign-up.php" method="post">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          <legend>Your info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name" placeholder="username" required>
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email" placeholder="name@email.com" required>
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password" placeholder="password" required>
          
          <label>Gender:</label>
          <input type="radio" id="female" value="female" name="user_gender"><label for=female" class="light">Female</label><br>
          <input type="radio" id="male" value="male" name="user_gender"><label for="male" class="light">Male</label><br>
          <br>
          <label>Age:</label>
          <input type="radio" id="teenage" value="Teenage" name="user_age"><label for="teenage" class="light">0-18</label><br>
          <input type="radio" id="adult" value="Adult" name="user_age"><label for="adult" class="light">19-30</label><br>
          <input type="radio" id="senior" value="Senior" name="user_age"><label for="senior" class="light">31-65</label>
        </fieldset>
        
        <fieldset>
          <legend>Your profile</legend>
          <label for="bio">Bio:</label>
          <textarea id="bio" name="user_bio"></textarea>
        </fieldset>
        <fieldset>
        <label for="car">Select the brand you like:</label>
        <select id="car" name="user_car">
            <option value="BMW">BMW</option>
            <option value="Hyundai">Hyundai</option>
            <option value="Tesla">Tesla</option>
            <option value="Audi"> Audi</option>
            <option value="Mercedes">Mercedes</option>
            <option value="Alfa-Romeo">Alfa-Romeo</option>
            <option value="Ford">Ford</option>
            <option value="Jaguar">Jaguar</option>
            <option value="Volkswagen">Volkswagen</option>
        </select>
        
          <label>Interests:</label>
          <input type="checkbox" id="suvs" value="interest_development" name="user_interest"><label class="light" for="development">SUVs</label><br>
          <input type="checkbox" id="sport" value="interest_design" name="user_interest"><label class="light" for="design">Sport Cars</label><br>
          <input type="checkbox" id="electrical" value="interest_business" name="user_interest"><label class="light" for="business">Electrical Vehicles</label><br>
          <input type="checkbox" id="sudan" value="interest_business" name="user_interest"><label class="light" for="business">Sedans</label>

          <label for="admin">Are you an administrator?</label>
          <input type="radio" name="user_role" id="user_role" value="Yes"><label for="">Yes</label>
          <input type="radio" name="user_role" id="user_role" value="No"><label>No</label>
        </fieldset>
        <button type="submit">Sign Up</button>
        <p class="sign-in">I have an account! <a href="sign-in.html">Sign In</a></p>
      </form>
      
    </body>
</html>
</body>
</html>
