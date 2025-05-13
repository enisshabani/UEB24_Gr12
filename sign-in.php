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

$output = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = new User($email, $password);

    $output .= "<h3>Te dhenat e futura:</h3>";
    $output .= "Email: " . htmlspecialchars($user->getUsername()) . "<br>";
    $output .= "Password: " . htmlspecialchars($user->getPassword()) . "<br>";

    $default_email = "test@gmail.com";

    if (preg_match(
        '/^[a-zA-Z0-9-.]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/',
        $email
    )) {
        if ($email === $default_email) {
            $output .= "Email adresa është valide dhe përputhet me default email.";
        } else {
            $output .= "Email adresa është valide, por nuk përputhet me default email.";
        }
    } else {
        $output .= "Email adresa nuk është valide.";
    }
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
.output {
    margin-top: 20px;
    text-align: center;
    color: #333;
}
  </style>
    </head>
    <body>
          <div class="login_form">
    <!-- Login form container -- Enis Morina -->
    <form action="#" method="POST">
      <h3>Log in with</h3>
      <div class="login_option">
        <!-- Google button -->
        <div class="option">
          <a href="#">
            <img src="img/google.png" alt="Google" />
            <span>Google</span>
          </a>
        </div>
        <!-- Apple button -->
        <div class="option">
          <a href="#">
            <img src="img/apple.png" alt="Apple" />
            <span>Apple</span>
          </a>
        </div>
      </div>
      <!-- Login option separator -->
      <p class="separator">
        <span>or</span>
      </p>
      <!-- Email input box -- Enis Shabani -->
      <div class="input_box">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter email address" required />
      </div>
      <!-- Paswwrod input box -->
      <div class="input_box">
        <div class="password_title">
          <label for="password">Password</label>
          <a href="#">Forgot Password?</a>
        </div>
        <input type="password" name="password" id="password" placeholder="Enter your password" required />
      </div>
       <!-- Login button -->
      <button type="submit">Log In</button>
      <p class="sign_up">Don't have an account? <a href="sign-up.php">Sign up</a></p>
    </form>
    <?php if ($output): ?>
        <div class="output">
            <?php echo $output; ?>
        </div>
    <?php endif; ?>
  </div>
</body>
</html>
