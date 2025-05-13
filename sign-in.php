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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Form in HTML and CSS</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

/* Enis Morina*/ 

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Montserrat", sans-serif;
}
body {
    width: 100%;
    min-height: 100vh;
    padding: 0 10px;
    display: flex;
    background: #fe5b3d;
    justify-content: center;
    align-items: center;
}
.login_form {
    width: 100%;
    max-width: 435px;
    background: #fff;
    border-radius: 6px;
    padding: 41px 30px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
}
.login_form h3 {
    font-size: 20px;
    text-align: center;
}

/* Pia Mjeku */

.login_form .login_option {
    display: flex;
    width: 100%;
    justify-content: space-between;
    align-items: center;
}
.login_form .login_option .option {
    width: calc(100% / 2 - 12px);
}
.login_form .login_option .option a {
    height: 56px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 12px;
    background: #F8F8FB;
    border: 1px solid #DADAF2;
    border-radius: 5px;
    margin: 34px 0 24px 0;
    text-decoration: none;
    color: #171645;
    font-weight: 500;
    transition: 0.2s ease;
}
.login_form .login_option .option a:hover {
    background: #ededf5;
    border-color: orangered;
}
.login_form .login_option .option a img {
    max-width: 25px;
}
.login_form p {
    text-align: center;
    font-weight: 500;
}

/* Rinesa Selmonaj */

.login_form .separator {
    position: relative;
    margin-bottom: 24px;
}

.login_form .separator span {
    background: #fff;
    z-index: 1;
    padding: 0 10px;
    position: relative;
}
.login_form .separator::after {
    content: '';
    position: absolute;
    width: 100%;
    top: 50%;
    left: 0;
    height: 1px;
    background: #C2C2C2;
    display: block;
}
form .input_box label {
    display: block;
    font-weight: 500;
    margin-bottom: 8px;
}

/*Rona Maxhuni*/

form .input_box input {
    width: 100%;
    height: 57px;
    border: 1px solid #DADAF2;
    border-radius: 5px;
    outline: none;
    background: #F8F8FB;
    font-size: 17px;
    padding: 0px 20px;
    margin-bottom: 25px;
    transition: 0.2s ease;
}
form .input_box input:focus {
    border-color: #626cd6;
}
form .input_box .password_title {
    display: flex;
    justify-content: space-between;
    text-align: center;
}
form .input_box {
    position: relative;
}
a {
    text-decoration: none;
    color:orangered;
    font-weight: 500;
}
a:hover {
    text-decoration: underline;
}

/*Enis Shabani*/

form button {
    width: 100%;
    height: 56px;
    border-radius: 5px;
    border: none;
    outline: none;
    background: black;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    text-transform: uppercase;
    cursor: pointer;
    margin-bottom: 28px;
    transition: 0.3s ease;
}
form button:hover {
    background: orange;
}
  </style>

         <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];    
    $password = $_POST['password'];
    $default_email = "test@gmail.com";

    
    if (preg_match(
        '/^[a-zA-Z0-9-.]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/',
        $email
    )) {
        
        if ($email === $default_email) {
            echo "Email adresa është valide dhe përputhet me default email.";
            
        } else {
            echo "Email adresa është valide, por nuk përputhet me default email.";
        }
    } else {
        echo "Email adresa nuk është valide.";
    }
}
?>

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
