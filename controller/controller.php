<?php
require("./app/Database.php");
class Controller extends Database
{
    public static function view($title, $viewname, $arr = null)
    {
        $smarty = new Ci_Smarty();
        $smarty->caching = false;
        if ($arr) {
            foreach ($arr as $key => $value) {
                $smarty->assign($key, $value);
            }
        }

        if($_SESSION["user_id"]){
            $data = self::query("SELECT username,premium FROM users WHERE id = '" . $_SESSION["user_id"] . "'");
            $smarty->assign("user",$data[0]);
        }
   
        $smarty->assign("APP_HOST", APP_HOST);
        $smarty->assign("title", $title);
        $smarty->display("views/" . $viewname . ".tpl");
    }
}
?>