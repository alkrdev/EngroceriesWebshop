<?php


namespace App\Controllers;

use App\DatabaseConnection;
use App\Mailer;

class UserController
{
    public function register()
    {
        return view('Register');
    }

    public function SendApplication()
    {
        if (isset($_POST['registration-submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone-number'];
            $zip_code = $_POST['zip-code'];
            $address = $_POST['address'];
            $cvr = $_POST['cvr'];
            $password = $_POST['psw'];
            $password_repeated = $_POST['psw-repeat'];

            //password regex
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number = preg_match('@[0-9]@', $password);
            $special = preg_match('@\W@', $password);

            //check if passwords match
            if ($password != $password_repeated) {
                $params['error_message'] = 'Passwords er ikke ens';
                return view('Register', $params);
            }
            //check if password satisfies regex
            if (!$uppercase || !$lowercase || !$number || !$special || strlen($password) < 8) {
                $params['error_message'] = 'Password opfylder ikke krav!';
                return view('Register', $params);
            }
            //checks if cvr is 8 digits in length
            if (strlen($cvr) != 8) {
                $params['error_message'] = 'CVR nummer er ikke gyldigt';
                return view('Register', $params);
            }
            //checks if phone_number is 8 digits in length
            if (strlen($phone_number) != 8) {
                $params['error_message'] = 'telefon nummer er ikke gyldigt';
                return view('Register', $params);
            }

            $db = new DatabaseConnection();
            $db->Connect();

            $db->QueryWithParamsFetchAll(<<<SQL
                INSERT INTO users(name, phone_number, email, password, address, zip_code, cvr, role, active) 
                VALUES (?,?,?,?,?,?,?,'Advanced',0);
            SQL, [$name, $phone_number, $email, hash('sha256', $password), $address, $zip_code, $cvr]);
            $params['success_message'] = 'Ansøgning Sendt';
            return view('LoginPage', $params);
        }
        return view('Register');
    }

    public function login()
    {
        $_SESSION["error"] = "";
        if (isset($_POST['login-submit'])) {
            if (isset($_POST['email']) && isset($_POST['psw'])) {
                $email = $_POST['email'];
                $pass = $_POST['psw'];

                $db = new DatabaseConnection();
                $db->Connect();
                $rows = $db->QueryWithParamsFetchAll("SELECT id, email, password, name, role, active FROM users WHERE email = ?", [$email]);

                if (count($rows) > 0) {
                    $user = $rows[0];
                    if ($user['password'] == hash('sha256', $pass) && ($user['active'] == true)) {

                        $_SESSION['is_auth'] = true;
                        $_SESSION['user_role'] = $user['role'];
                        $_SESSION['active'] = $user['active'];
                        $_SESSION['user_id'] = $user['id'];
                        $_SESSION['name'] = $user['name'];
                        redirect('/shop');

                    } else {
                        $_SESSION['error'] =  "Invalid email or password. Please try again.";
                        return view('Loginpage');
                    }
                } else {
                    $_SESSION['error'] = "Invalid email or password. Please try again.";
                    return view('Loginpage');
                }
            } else {
                $_SESSION['error'] = "Please enter an email and password to login.";
                return view('Loginpage');
            }
        } else {
            return view('Loginpage');
        }
    }

    public function logout()
    {
        unset($_SESSION['is_auth']);
        unset($_SESSION['user_role']);
        unset($_SESSION['user_id']);
        unset($_SESSION['name']);
        unset($_SESSION['active']);

        $_SESSION = [];

        session_destroy();

        redirect('/login');
    }

    public function confirmApplication()
    {
        if (isset($_POST['applicant_id'])) {
            $user_id = $_POST['applicant_id'];
            $db = new DatabaseConnection();
            $db->Connect();

            $users = $db->QueryWithParamsFetchAll(<<<SQL
                SELECT * FROM users
                WHERE id = ?
            SQL, [$user_id]);

            $user = $users[0];

            $db->QueryWithParamsFetchAll(<<<SQL
                UPDATE users
                SET active = 1
                WHERE id = ?
            SQL, [$user_id]);

            // Mail section
            $mail = new Mailer();
            $body = <<<_LOADTEMPLATE
                <div>
                    <p>Hej {$user['name']},</p>
                    <br>
                    <p>Vi har godkendt din ansøgning</p>
                    <p>Så nu kan logge ind og bruge Engroceries services</p>
                    <br>
                    <p>Med venlig hilsen</p>
                    <br>
                    <p>Engroceries A/S</p>
                </div>
                <div>
                    <img src="/images/engroceries_logo.png"/>
                </div>               
            _LOADTEMPLATE;

            $mail->send($user['email'], $user['name'], 'Din ansøgning er godkendt', $body);
        }
        redirect(url('show-applications'));
    }

    public function denyApplication()
    {
        if (isset($_POST['applicant_id'])) {
            $user_id = $_POST['applicant_id'];
            $db = new DatabaseConnection();
            $db->Connect();

            $users = $db->QueryWithParamsFetchAll(<<<SQL
                SELECT * FROM users
                WHERE id = ?
            SQL, [$user_id]);

            $user = $users[0];

            $db->QueryWithParamsFetchAll(<<<SQL
                DELETE FROM users
                where id = ?
            SQL, [$user_id]);

            //Mail Section
            $mail = new Mailer();
            $body = <<<_LOADTEMPLATE
                <div>
                    <p>Hej {$user['name']},</p>
                    <br>
                    <p>Vi har Afvist din ansøgning</p>
                    <p>Hvis du vil klage vores beslutning kan du kontakte os via telefon</p>
                    <br>
                    <p>Med venlig hilsen</p>
                    <br>
                    <p>Engroceries A/S</p>
                </div>
                <div>
                    <img src="/images/engroceries_logo.png"/>
                </div>               
            _LOADTEMPLATE;

            $mail->send($user['email'], $user['name'], 'Din ansøgning er Afslået', $body);
        }
        redirect(url('show-applications'));
    }
}