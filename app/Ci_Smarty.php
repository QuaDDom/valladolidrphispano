<?php
require(__DIR__ . "/../vendor/smarty/smarty/libs/Smarty.class.php");

class Ci_Smarty extends Smarty
{
    public function __construct()
    {
        parent::__construct();

        $this->setTemplateDir("./views");
        $this->setCompileDir("./views/compiled");
        $this->setCacheDir("./cache");
        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;

    }
}
?>