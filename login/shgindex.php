<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="shg.css" />
    <title>Sahayaks</title>
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
            <a href="profile.php">PROFILE</a>
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
            <a href="profile.php" class="mob-list__item">PROFILE</a>
            <a href="about.php" class="mob-list__item">ABOUT</a>
            <a href="logout.php" class="mob-list__item">LOGOUT</a>
          </div>
        </div>
      </div>
      </script>

<script src="javascripttest.js"></script>
    </main>

    <h2>Users Table</h2>

    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Address</th>
        <th>Verification Data</th>
        <th>Email</th>
        <th>Agency</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Lord Voldemort</td>
        <td>1234567890</td>
        <td>B/62, Sector-9, Rourkela</td>
        <td>Verified</td>
        <td>example@example.com</td>
        <td>Hogwarts</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Newt Scamander </td>
        <td>1234567890</td>
        <td>A/42, Khandagiri</td>
        <td>Verified</td>
        <td>example@example.com</td>
        <td>Hogwarts</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Parvati Patil</td>
        <td>1234567890</td>
        <td>ITER, Khandagiri</td>
        <td>Verified</td>
        <td>example@example.com</td>
        <td>Hogwarts</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Dolores Umbridge</td>
        <td>1234567890</td>
        <td>B/4U, Patia</td>
        <td>Verified</td>
        <td>example@example.com</td>
        <td>Hogwarts</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Ginny Weasley</td>
        <td>1234567890</td>
        <td>Q/69, Janpath</td>
        <td>Verified</td>
        <td>example@example.com</td>
        <td>Hogwarts</td>
      </tr>
      
    </table>
  </body>
</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>