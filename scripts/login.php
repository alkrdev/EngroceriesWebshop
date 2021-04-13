<?php
    // MODIFIED VERSION OF https://www.coderslexicon.com/really-simple-php-login-logout-script-example/#:~:text=%20There%20are%20four%20main%20parts%20to%20a,page%20to%20see%20if%20they%20have...%20More%20

    session_start();

    if (isset($_POST['login-submit'])) {
        if (isset($_POST['emailaddress']) && isset($_POST['pass'])) {
            $email = $_POST['emailaddress'];
            $pass = $_POST['pass'];
 
            $pdo = new Database();
            $pdo->query("SELECT id, email, password, name, level FROM db_users WHERE email = :emailaddr");
            $pdo->bind(':emailaddr', $email);
            $row = $pdo->single();
 
            if (($row !== false) && ($pdo->rowCount() > 0)) {
                if ($row['password'] == hash('sha256', $pass)) {
 
                    $_SESSION['is_auth'] = true;
                    $_SESSION['user_level'] = $row['level'];
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['name'] = $row['name'];
 
                    // Once the sessions variables have been set, redirect them to the landing page / home page.
                    header('location: home.php');
                    exit;
                }
                else {
                    $error = "Invalid email or password. Please try again.";
                }
            }
            else {
                $error = "Invalid email or password. Please try again.";
            }
        }
        else {
            $error = "Please enter an email and password to login.";
        }
    }
52
?>
