<?php

class Index extends Controller
{

    public static function index()
    {

        $title = "Inicio";

        $Slider = self::query("SELECT * FROM slider_post ORDER BY id DESC LIMIT 6");
        $Blog = self::query("SELECT * FROM blog_post ORDER BY id DESC LIMIT 3");

        $setValue = array(
            "blog" => $Blog,
            "slider" => $Slider,
        );

        self::view($title, "index", $setValue);
    }

}
?>