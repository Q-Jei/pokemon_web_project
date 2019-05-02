<?php
function getAllPokemons($bdd) {
    $requete_pokemon = $bdd->prepare('SELECT * FROM pokemons ORDER BY numero');
    $requete_pokemon->execute();
    return $requete_pokemon;
}

function getPokemonsOfType($bdd, $typeID, $second_typeID) {
    $requete_pokemon = $bdd->prepare('SELECT * FROM pokemons WHERE type = ? OR secondary_type = ? ORDER BY numero');
    $requete_pokemon->execute(array($typeID, $second_typeID));
    return $requete_pokemon;
}

function displayListOfPokemons($requete_pokemon) {
    while ($reponse_pokemon = $requete_pokemon->fetch()) {
        echo "<table id=pokemon><tr><td>" . $reponse_pokemon["nom_pokemon"] ."</td><td>#" . $reponse_pokemon["numero"] ."</td></tr><tr><td height=256 colspan=2><img src=" . $reponse_pokemon['image'] . "></img></td></tr></table>";  
    }
}

define("NOTYPESELECTED", "-1");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/pokemon_liste.css" />
        <link rel="stylesheet" media="screen and (max-width: 1280px)" href="css/small_style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <title>Pokémon de A à Z - Les types (Liste des Pokémon)</title>
    </head>

    <?php
    try {

        $bdd = new PDO('mysql:host=localhost;dbname=fil_rouge;charset=utf8', 'root', '');
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());

    }
    ?>

    <body class="bloc_page">

        <?php include("include/icon_bar.php"); ?>

        <?php include("include/header.php"); ?>

        <?php include("include/menu.php"); ?>

            <?php 
            $nomType = "indéfini";
            $id_type = NOTYPESELECTED;
            if(isset($_GET['id_type'])){
                $id_type = $_GET['id_type'];
                $requete_type = $bdd->prepare('SELECT nom_type FROM types WHERE id_type = ?');
                $requete_type->execute(array($id_type));
                $reponse_type = $requete_type->fetch();
                $nomType = $reponse_type['nom_type'];
            }
            ?>

            <?php
            $requete_compteType = $bdd->prepare('SELECT count(*) FROM types WHERE id_type = ?');
            $requete_compteType->execute(array($id_type));
            $reponse_compteType = $requete_compteType->fetch();
            ?>

             <section>
                <div id="types">
                    <?php
                    $requete_pokemon = "";
                    if(($id_type===NOTYPESELECTED) OR ($reponse_compteType['count(*)'] == 0)){
                        echo '<img src="css/images/plante.png" class="plante" alt="" />';
                        echo '<img src="css/images/feu.png" class="feu" alt="" />';
                    }
                    ?>
                    <h1 style="text-align:center;" id="type_<?php echo $id_type ?>">Liste des Pokémon<?php if($reponse_compteType['count(*)'] == 0) {
                        $nomType = "";
                        echo $nomType;
                    }
                    else {
                        echo " de Type " . $nomType;
                    }?></h1>
                    <?php
                    $requete_pokemon = "";
                    if(($id_type===NOTYPESELECTED) OR ($reponse_compteType['count(*)'] == 0)){
                        echo '<img src="css/images/eau.png" class="eau" alt="" />';
                        echo '<img src="css/images/foudre.png" class="foudre" alt="" />';
                    }
                    ?>
                </div>

                <article id=article_pokedex>
                    <p>Bienvenue à vous ! Ceci n'est qu'une infime partie de ce que le Pokédex aurait à vous dévoiler une fois entièrement rempli. Comme vous l'aurez constaté, il existe de nombreux Pokémon par type, 807 pour être précis. Les recherches à leur sujet ne cessant d'être approfondies, on est bien obligé d'admettre que l'exhaustivité de la liste des Pokémon est considérable, plus encore que celle des types... mais ça, c'est un peu trivial. Bon, assez parlé ! Je vous invite à voir par vous-mêmes de quoi il retourne pour que vous vous fassiez votre propre opinion.</p>
                    <p>Si vous voulez revenir à la page des forces et faiblesses des types, cliquez <a href="forces_faiblesses.php" style="color: #cf6ac5; text-decoration: none; font-style: italic;">ici</a> !</p>
                </article>

                <div id="pokedex">

                    <hr style="border-color: #2c2d28; border-width: 3px;">
                    <hr style="border-color: #2c2d28; border-width: 3px; margin-bottom: 20px;">

                    <div id="inner_pokedex">

                        <?php
                        $requete_pokemon = "";
                        if(($id_type===NOTYPESELECTED) OR ($reponse_compteType['count(*)'] == 0)){
                            $requete_pokemon = getAllPokemons($bdd);
                        }
                        else {
                            $requete_pokemon = getPokemonsOfType($bdd, $id_type, $id_type);
                        }
                        displayListOfPokemons($requete_pokemon);
                        ?>

                    </div>
                </div>
            </section>
        </div>
    </body>
</html>