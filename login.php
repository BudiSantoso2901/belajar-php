<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    

    if ($username === 'menyala' && $password === 'abangku') {
        $_SESSION['username'] = $username;
        header("Location: http://localhost/TUGAS 3/produk.php");
        exit;
    } else {
        $error = "Username atau password salah";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <h1>Login</h1>
      <p>Silahkan login untuk melanjutkan</p><br>
      <p>user = menyala pw =abangku</p>
      <?php if(isset($error)) { ?>
        <div class="error"><?php echo $error; ?></div>
      <?php } ?>
      <form method="post" action="">
        <div class="form-group">
          <label for="username">Username</label>
          <div class="input-with-icon">
            <input
              type="text"
              id="username"
              name="username"
              placeholder="Username"
              required
            />
            <img src="images/email.png" class="icon" alt="Surat Icon" />
          </div>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <div class="input-with-icon">
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Password"
              required
            />
            <img src="images/padlock.png" class="icon" alt="Gembok Icon" />
          </div>
        </div>
        <div class="form-group">
          <div class="remember-login">
            <input type="checkbox" id="remember" name="remember" />
            <label for="remember"> Remember Me</label>
          </div>
          <button type="submit" class="login-btn">Login</button>
        </div>
        <div class="form-group">
          <a href="#">Lupa password</a>
        </div>
        <div class="form-group">
          <a href="http://localhost/belajar-php/List-produk.php" class="register-btn">Register</a>
        </div>
      </form>
    </div>
  </body>
</html>
