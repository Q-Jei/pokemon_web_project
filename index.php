<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/index.css" />
        <link rel="stylesheet" media="screen and (max-width: 1640px)" href="css/small_style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <title>Pokémon de A à Z - Les types</title>
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

        <section>
            <div id="types">
                <img src="css/images/plante.png" class="plante" alt="" />
                <img src="css/images/feu.png" class="feu" alt="" />
                <h1>Les Types</h1>
                <img src="css/images/eau.png" class="eau" alt="" />
                <img src="css/images/foudre.png" class="foudre" alt="" />
            </div>
            <article>
                <p>Les types sont les propriétés associées aux Pokémon ainsi qu'à chacune de leurs capacités respectives. Ils sont généralement liés à des minéraux, des végétales, et plus encore. Aujourd'hui, on recense au total 18 types de Pokémon différents, à noter que les Types Ténèbres, Acier et Fée ont été les derniers à avoir été identifiés. Il n'est pas rare de voir un Pokémon partager deux types distincts, voire de le voir maîtriser des capacités de type différent de son type initial. En revanche, chaque capacité n'est associée qu'à un seul type. De ce fait, l'efficacité d'une capacité offensive sera alterée selon le type de Pokémon sur lequel elle aura été utilisée. Par exemple, l'eau éteignant le feu, une attaque aquatique sera très efficace contre un Pokémon volcanique, mais perdra en efficacité face à un adversaire de Type Plante, car les végétaux absorbent l'eau, les dégâts seront donc amoindris. Dans des cas bien précis, certaines attaques pourront même être totalement ignorées, n'infligeant aucun dégât à la cible, le meilleur exemple étant les Pokémon de Type Spectre ignorant la portée des attaques de Type Normal et Combat, ces derniers étant immatériels. Par ailleurs, beaucoup de dresseurs ont tendance à se spécialiser dans la maîtrise d'un seul type de Pokémon, en partciulier les Champions d'Arène ainsi que les Membres de l'Élite 4 des différentes régions. Mais avant d'aller plus loin, focalisons-nous d'abord sur un type de Pokémon à la fois pour mieux comprendre comment tout cela fonctionne.</p>
                <p>Si vous cherchez à en savoir davantage sur les forces et les faiblesses des différents types, cliquez <a href="forces_faiblesses.php" style="color: #cf6ac5; text-decoration:none; font-style: italic;">ici</a> !</p>
            </article>

            <div id="divType">

            <?php

            $requete_type = $bdd->query('SELECT * FROM types');

            while ($reponse_type = $requete_type->fetch()) {
            ?>
                    
                <div id="div<?php echo $reponse_type['id'] ?>">

                <hr style="border-color: #2c2d28; border-width: 3px;">
                <hr style="border-color: #2c2d28; border-width: 3px;">

                <h2 id="typeTitre<?php echo $reponse_type['id'] ?>">Type <?php echo $reponse_type['nom_type'] ?></h2>

                <img src="css/images/game<?php echo $reponse_type['id'] ?>.png" class="game<?php echo $reponse_type['id'] ?>" alt="" />

                <p class="description"><?php echo $reponse_type['caracteristiques'] ?></p>

                <div id="tableaux">

                <table class="tableauA">
                    <caption>Quelques exemples de capacités</caption>
                    <tr>
                        <td>Capacités physiques</td>
                        <td>
                            <p>

                            <?php
                            $requete_attaque = $bdd->prepare('SELECT * FROM attaques WHERE id_type = ? AND physique = "oui"');
                            $requete_attaque->execute(array($reponse_type['id_type']));

                            while ($reponse_attaque = $requete_attaque->fetch()) {
                                echo $reponse_attaque['nom_attaque'] . ', ';
                            }
                            ?>

                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>Capacités spéciales</td>
                        <td>
                            <p>

                            <?php
                            $requete_attaque = $bdd->prepare('SELECT * FROM attaques WHERE id_type = ? AND special = "oui"');
                            $requete_attaque->execute(array($reponse_type['id_type']));

                            while ($reponse_attaque = $requete_attaque->fetch()) {
                                echo $reponse_attaque['nom_attaque'] . ', ';
                            }
                            ?>

                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>Capacités inoffensives</td>
                        <td>
                            <p>

                            <?php
                            $requete_attaque = $bdd->prepare('SELECT * FROM attaques WHERE id_type = ? AND inoffensif = "oui"');
                            $requete_attaque->execute(array($reponse_type['id_type']));

                            while ($reponse_attaque = $requete_attaque->fetch()) {
                                echo $reponse_attaque['nom_attaque'] . ', ';
                            }
                            ?>

                            </p>
                        </td>
                    </tr>
                </table>

                <?php
                    $requete_pokemon = $bdd->prepare('SELECT * FROM pokemons WHERE type = ? ORDER BY numero LIMIT 0, 3');
                    $requete_pokemon->execute(array($reponse_type['id_type']));
                    $reponse_pokemon = $requete_pokemon->fetch();
                    $tabPokemons=[];
                    if ($reponse_pokemon !== false ){
                ?>

                <table class="tableauB" id="poketable<?php echo $reponse_type['id'] ?>">
                    <caption>Quelques exemples de Pokémon</caption>
                    <tr>
                        <td>Apparence</td>

                        <?php
                        echo "<td><img src=" . $reponse_pokemon['image'] . "></td>";
                        $tabPokemons[sizeof($tabPokemons)] = $reponse_pokemon;

                        while ($reponse_pokemon = $requete_pokemon->fetch()) {
                            echo "<td><img src=" . $reponse_pokemon['image'] . "></td>";
                            $tabPokemons[sizeof($tabPokemons)] = $reponse_pokemon;
                        }
                        ?>

                    </tr>
                    <tr>
                        <td style="padding-top: 20px; padding-bottom: 20px;">Nom</td>

                        <?php
                        for($i=0; $i!==sizeof($tabPokemons); $i++) {
                            echo '<td>' . $tabPokemons[$i]['nom_pokemon'] . '</td>';
                        }
                        ?>

                    </tr>
                    <tr>
                        <td style="padding-top: 20px; padding-bottom: 20px;">Numéro</td>

                        <?php
                        for($i=0; $i!==sizeof($tabPokemons); $i++) {
                            echo '<td>' . "#" . $tabPokemons[$i]['numero'] . '</td>';
                        }
                        ?>

                    </tr>
                </table>

                </div>

                <?php
                }
            }
        ?>

        </section>
    </body>
</html>