<?php 

session_start(); 

include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM usersdata WHERE user_name='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['user_name'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                $_SESSION['mail'] = $row['mail'];

                $_SESSION['age'] = $row['age'];

                $_SESSION['dob'] = $row['dob'];

                $_SESSION['address'] = $row['address'];

                $_SESSION['medical_history'] = $row['medical_history'];

                

                header("Location: home.php");

                exit();

            }else{

                header("Location: index.php?error=Incorrect User name or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorrect User name or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}