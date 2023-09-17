<?php
class ErrorS extends Controller
{
    public static function index()
    {
        $title = "Error 404";

        self::view($title, "errors");
    }
}
?>