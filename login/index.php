<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Simple Login Form Example</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins"><link rel="stylesheet" href="./style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-form">
    <form action="login.php" method="post">
    <h1>Login</h1>

    <?php if (isset($_GET['error'])) { ?>

      <p class="error"><?php echo $_GET['error']; ?></p>

    <?php } ?>

    <div class="content">
      <div class="input-field">
      <input type="text" name="uname" placeholder="User Name"><br>
      </div>
      <div class="input-field">
      <input type="password" name="password" placeholder="Password"><br>
      </div>
      <a href="#" class="link">Forgot Your Password?</a>
    </div>
    <div class="action">
      <button>Register</button>
      <button type="submit">Login</button>
    </div>
    </form>
</div>

<div class="lids">
    <h3>
      Use these:
    </h3>
    <table>
      <tr>
        <td>User name</td>
        <td>Password</td>
      </tr>
      <tr>
        <td>Harry Potter</td>
        <td>2626</td>
      </tr>
      <tr>
        <td>Hermione Granger</td>
        <td>5692</td>
      </tr>
      <tr>
        <td>Ron Weasley</td>
        <td>1234</td>
      </tr>
    </table>
  </div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
