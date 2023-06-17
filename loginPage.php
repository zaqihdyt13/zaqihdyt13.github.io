<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: homePage.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: homePage.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - MyGallery</title>

    <!-- MyCSS -->
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
  <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>

    <div class="loginPage">
      <div class="loginPage-blur">
        <div class="container">
          <h1>Login</h1>

          <form action="" method="POST">
            <label>Email</label>
            <input
              type="email"
              placeholder="Masukkan email anda"
              name="email"
              class="input"
              value="<?php echo $email; ?>"
              required
            />

            <label>Password</label>
            <input
              type="password"
              placeholder="Masukkan Password anda"
              name="password"
              class="input"
              value="<?php echo $_POST['password']; ?>"
              required
            />

            <div class="checkBox">
              <input type="checkbox" />
              <label class="label">Remember me</label>
            </div>

            <button name="submit" class="btn">Login</button>

            <label class="label-plus"><a href="#">Forgot password?</a></label>

            <label class="label-plus"
              ><a href="register.php">Dont have account yet?</a></label
            >
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
