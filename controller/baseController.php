<?php
// const title = "Le Joker";
    $_versionPhp = phpversion();
    $lang = ["fr","en","it"];
    $styleCss = "public/css/style.css";
    $_date = date('Y-d-m');
    $_years = new DateTime();
    

    # classe ref
    class User{
        public $title = "Le Joker";
        static $infoFooter = "Informations sur le film Le Joker";
    }

    # instance
    $newtitle = new User();
    
   
                    class Utilisateur{
                        public function actorsInfo(){
                            $actors = [
                                array(
                                    "prenom"=>"Joaquin",
                                    "nom"=>"Phoenix",
                                    "role"=>"dans le rôle d'Arthur Fleck (Joker)"
                                ),
                                array(
                                    "prenom"=>"Robert",
                                    "nom"=>"De Niro",
                                    "role"=>"dans le rôle de Murray Franklin"
                                ),
                                array(
                                    "prenom"=>"Zazie",
                                    "nom"=>"Beetz",
                                    "role"=>"dans le rôle de Sophie Dumond"
                                ),
                                array(
                                    "prenom"=>"Frances",
                                    "nom"=>"Conroy",
                                    "role"=>"dans le rôle de Penny Fleck"
                                ),
                                
                            ];
                        
                        return $actors;
                    }
                        public function storyline(){
                            $story = ["title"=>"Histoire du film", 
                            "storyline" => "En 1981, à Gotham City, Arthur Fleck, un comédien raté, sombre dans la folie
                            après une série de tragédies et d'humiliations. Incapable de se connecter aux
                            autres et désespéré par l'absence de sens dans sa vie, Arthur se transforme
                            progressivement en Joker, une figure de chaos et de violence, qui devient 
                            une icône pour les citoyens les plus marginalisés."];
                            return $story;
                        }
                }
                $instance_utilisateur = new Utilisateur();
                $actors = $instance_utilisateur->actorsInfo();


                
                
                
                