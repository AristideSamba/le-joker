<?php
// const title = "Le Joker";
    $_versionPhp = phpversion();
    $lang = ["fr","en","it"];
    $styleCss = "public/css/style.css";
    $_date = date('Y-d-m');
    $_years = new DateTime();
    $navigator = $_SERVER["PHP-SELF"];
    $

    # classe ref
    class User{
        public $title = "Le Joker";
        static $infoFooter = "Informations sur le film Le Joker";
    }

    # instance
    $newtitle = new User();
    
