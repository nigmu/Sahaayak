<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>

  <!-- Custom Css -->
  <link rel="stylesheet" href="profile.css">

  <!-- FontAwesome 5 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
</head>

<body>

<main class="bck-img">
      <div class="header-background">
        <header class="header container">
          <div class="logo-wrapper">
            <a class="logo" href="test.html"
              ><img class="limg" src="IMAGES\SS2.png" alt="SAHAYAK"
            /></a>
          </div>

          <nav class="nav">
            <a href="home.php">HOME</a>
            <a href="shgindex.php">SAHAYAKS</a>
            <a href="home.php">PROFILE</a>
            <a href="about.php">ABOUT</a>
            <a href="logout.php">LOGOUT</a>
          </nav>
        </header>
      </div>

      <!-- mob  -->

      <div class="mob-menu">
        <img
          class="mob-open"
          src="IMAGES\icons8-hamburger-menu-24.png"
          alt="openSvg"
        />
        <div class="mob-wrapper close">
          <img
            src="IMAGES\icons8-hamburger-menu-24.png"
            class="mob-close"
            alt="closeSvg"
          />
          <div class="mob-list">
            <a href="#" class="mob-list__item"
              ><img src="IMAGES\90x160.png" alt="SAHAYAK"
            /></a>
            <a href="home.php" class="mob-list__item">HOME</a>
            <a href="shgindex.php" class="mob-list__item">SAHAYAKS</a>
            <a href="home.php" class="mob-list__item">PROFILE</a>
            <a href="about.php" class="mob-list__item">ABOUT</a>
            <a href="logout.php" class="mob-list__item">LOGOUT</a>
          </div>
        </div>
      </div>
      </script>

<script src="javascripttest.js"></script>
    </main>

    <h1 align="center">Hello, <?php echo $_SESSION['user_name']; ?></h1>

  <!-- Main -->
  <div class="main">
    <h2>IDENTITY</h2>
    <div class="card">
      <div class="card-body">
        <i class="fa fa-pen fa-xs edit"></i>
        <table>
          <tbody>
            <tr>
              <td>Id</td>
              <td>:</td>
              <td><?php echo $_SESSION['id']; ?></td>
            </tr>
            <tr>
              <td>Name</td>
              <td>:</td>
              <td><?php echo $_SESSION['user_name']; ?></td>
            </tr>
            <tr>
              <td>Email</td>
              <td>:</td>
              <td><?php echo $_SESSION['mail']; ?></td>
            </tr>
            <tr>
              <td>Age</td>
              <td>:</td>
              <td><?php echo $_SESSION['age']; ?></td>
            </tr>
            <tr>
              <td>Date of Birth</td>
              <td>:</td>
              <td><?php echo $_SESSION['dob']; ?></td>
            </tr>
            <tr>
              <td>Address</td>
              <td>:</td>
              <td><?php echo $_SESSION['address']; ?></td>
            </tr>
            <tr>
              <td>Medical Records</td>
              <td>:</td>
              <td><?php echo $_SESSION['medical_history']; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>

</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>