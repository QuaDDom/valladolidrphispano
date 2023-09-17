<?php
class MainAdminController extends Controller
{
    public static function index()
    {

        $title = "Canal En vivo";
        if (isset($_SESSION['user_id'])) {
            self::view($title, "admin/main");
        } else {
            header("Location: " . APP_HOST . "/");
        }

    }
}
?>