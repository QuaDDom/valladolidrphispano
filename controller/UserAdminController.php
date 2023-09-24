<?php
class UserAdminController extends Controller
{
    public static function index($params)
    {
        $title = "Autenticador";

        if ($params && !isset($_SESSION['user_id'])) {
            if ($params["type"] == "register") {
                if (strtoupper($_SERVER["REQUEST_METHOD"]) == "GET") {
                    $setValue = array(
                        "login" => false
                    );
                    self::view($title, "auth", $setValue);
                } else if (strtoupper($_SERVER["REQUEST_METHOD"]) == "POST" && $_POST["submit"]) {

                    $username = $_POST["username"];
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    $password_hash = password_hash($password, PASSWORD_BCRYPT);

                    $user = self::query("SELECT * FROM users WHERE email = '" . $email . "'");

                    if (sizeof($user) == 0) {
                        $rg = self::query("INSERT INTO users set username = '" . $username . "',email = '" . $email . "', password = '" . $password_hash . "'");
                        if ($rg) {
                            //user register true
                            header("Location: " . APP_HOST . "/");
                        } else {
                            header("Location: " . APP_HOST . "/404");
                        }
                    }else {
                        header("Location: " . APP_HOST . "/404");
                    }



                }
            } else if ($params["type"] == "login") {
                if (strtoupper($_SERVER["REQUEST_METHOD"]) == "GET") {
                    $setValue = array(
                        "login" => true
                    );
                    self::view($title, "auth", $setValue);
                } else if (strtoupper($_SERVER["REQUEST_METHOD"]) == "POST" && $_POST["submit"]) {
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    $data = self::query("SELECT * FROM users WHERE email = '" . $email . "' and status=0");
                    if (!$data) {
                        // error username or password or ban
                        header("Location: " . APP_HOST . "/404");
                    } else {
                        if (password_verify($password, $data[0]["password"])) {
                            $_SESSION["user_id"] = $data[0]["id"];
                           

                            // session login
                            header("Location: " . APP_HOST . "/");
                        } else {
                            header("Location: " . APP_HOST . "/404");
                        }
                    }
                }

            } else {
                header("Location: " . APP_HOST . "/404");
            }

        } else if ($params["type"] == "logout" && isset($_SESSION['user_id'])) {
            unset($_SESSION["user_id"]);
            session_destroy();
            header("Location: " . APP_HOST . "/");
        } else {
            header("Location: " . APP_HOST . "/404");
        }
    }
}
?>