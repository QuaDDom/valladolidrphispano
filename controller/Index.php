<?php

class Index extends Controller
{

    public static function index()
    {

        $title = "Inicio";

        $Slider = self::query("SELECT * FROM slider_post ORDER BY id DESC LIMIT 6");
 
        $setValue = array(
            "slider" => $Slider,
        );

        self::view($title, "index", $setValue);
    }

}
?>