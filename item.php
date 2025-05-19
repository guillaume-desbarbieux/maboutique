<!DOCTYPE html>
<html>

<body>
    <?php

    $nom = "Nez de clown";
    $prix = 10;
    $url = "https://static.wesco.fr/media/catalog/product/cache/7ccc10e5a8277e9f8854785247b9d41d/4/9/49685_160511_pd.jpg";
    $description = "Magnifique nez rouge";


    echo "
        <h1>$nom</h1>
        <p>Prix : $prix €</p>
        <img src=$url alt=$description>
        ";
    ?>

</body>

</html>