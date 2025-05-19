#1 PHP Syntax

    - le fichier PHP contient de l'HTML et un script PHP 
        <!DOCTYPE html>
        <html>
        <body>

        <h1>My first PHP page</h1>

        <?php echo "Hello World!"; ?>

        </body>
        </html>

    - PHP script commence par       <?php      et se termine par        ?>
    - Les commandes PHP se terminent par        ;
    -
    - les fontctions, classes, mot-clés ne sont pas sensibles à la casse
    - ! Les variables sont sensibles à la casse !
    - Pour commenter :      //  commentaire sur une ligne
                            #   commentaire sur une ligne
                            /*  commentaire sur
                                plusieurs lignes */
    - Assignation de variables :    $x = 15;
                                    $my_variable = "mot";
                                    $a = $b = $c = "coucou";    // toutes les variables valent "coucou"
    - Affichage de variable     $txt = "Campus"
                                echo "I love $txt !";       // Sortie : I Love Campus !
                                echo "I love ".$txt." !";   // Sortie : I Love Campus !
    - Les variables n'ont pas besoins d'être typées ni déclarées (exceptions depuis PHP 7 avec strict et non-strict)
    - var_dump($ma_variable) permet d'obtenir la valeur et le type de $ma_variable

    - différents usages de echo :       echo "<h2>PHP is Fun!</h2>";
                                        echo "Hello world!<br>";
                                        echo "I'm about to learn PHP!<br>";
                                        echo "This ", "string ", "was ", "made ", "with multiple parameters.";
    - pour insérer les variables selont guillemets utilisés :
                "voici ma variable $var voyez comme elle brille";
                'voici ma variable '.$var.' voyez comme elle brille';

    - types de variable
        - String    $txt = "coucou";        strlen()        str_word_count()        strpos()
        - Integer   $a = -5 ;               PHP_INT_MAX     PHP_INT_MIN             is_int()
        - Float     $b = 10.2;              PHP_FLOAT_MAX   PHP_FLOAT_MIN           is_float()
        - Boolean   $c = true;
        - Array     $eleves = array("Jacques","Jean","Pierre");
        - Objects   et classes
            Les classes sont des modèles d'objets
            Les objets sont des exemples de classe; des instances.

            class Car {
                public $color;
                public $model;
                public function __construct($color, $model) {
                    $this->color = $color;
                    $this->model = $model;
                    }
                public function message() {
                    return "My car is a " . $this->color . " " . $this->model . "!";
                    }
                }
        - NULL
        - Infinity              is_finite()       is_infinite()
        - NaN                   is_nan()
        - Numerical String      is_numeric()


   