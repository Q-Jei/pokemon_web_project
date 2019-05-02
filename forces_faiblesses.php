<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/forces_faiblesses.css" />
        <link rel="stylesheet" media="screen and (max-width: 1280px)" href="css/small_style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <title>Pokémon de A à Z - Les types (Forces et faiblesses)</title>
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
                    <h1>Forces et Faiblesses</h1>
                    <img src="css/images/eau.png" class="eau" alt="" />
                    <img src="css/images/foudre.png" class="foudre" alt="" />
                </div>

                <article>
                    <p>La résistance et la vulnérabilité des Pokémon sont deux choses qui diffèrent énormément en fonction du ou des types auxquels ils appartiennent. C'est pour cette raison que la difficulté d'un combat entre deux Pokémon n'est ni plus ni moins qu'une question de relativité, et qu'il peut s'avérer parfois compliqué de tirer son épingle du jeu en ne se spécialisant que dans la maîtrise d'un seul type. D'où l'intérêt d'avoir une équipe assez homogène avec une palette d'attaques variée pour contrebalancer au mieux les faiblesses de vos bêtes de combat. En effet, si vous ne le saviez pas déjà, j'ai le regret de vous annoncer que le ''Type Parfait'' n'existe pas. Il y aura toujours un type qui l'emportera sur un autre, et on n'est à l'abri d'aucune surprise. Pour illustrer mes propos, Artikodin qui est extrêmement sensible aux attaques de type Roche pourrait très bien surprendre un Grolem avec une attaque Eau (Comme Vibraqua par exemple), alors que ce dernier est pourtant en position de force par rapport à ce Pokémon Oiseau Légendaire en raison de son appartenance au type Roche. Maîtriser cette subtilité entre vos attaques et les types des Pokémon de vos adversaires, c'est la clé pour ressortir gagnant de n'importe quel combat. Bien qu'il en faut plus encore pour s'approprier la victoire, prendre conscience de ses forces et de ses faiblesses est déjà une très bonne chose en soi. Aussi, la liste des types est assez exhaustive. Comme dit précédemment, il y en a 18. Si vous avez prévu de vous frotter prochainement à un Champion d'Arène, n'hésitez pas à consulter le tableau ci-dessous pour savoir quels seraient les types de Pokémon les plus appropriés. Croyez-moi, vous me remercierez par la suite !</p>
                </article>

                <div id="forces_faiblesses">

                    <hr style="border-color: #2c2d28; border-width: 3px;">
                    <hr style="border-color: #2c2d28; border-width: 3px;">
                    <table class="tableau_fofa">
                        <tr>

                            <h3>Choisissez votre type pour voir quels Pokémon y correspondent</h3>

                            <td class="your_type"><a href="pokemon_liste.php?id_type=8" style="color: #b29c96; text-decoration: none;">Normal<span class="text_describe">
                            <span class="titre_pokemon">Pokémon Normal:</span></br>
                            Résistants aux attaques du type suivant : <span class="pokemon_resistence">aucun.</span></br>
                            Vulnérables aux attaques du type suivant : <span class="pokemon_no_resistence">Combat.</span></br>
                            Invincibles aux attaques du type suivant : <span class="pokemon_invincible">Spectre.</span></br></br>
                            <span class="titre_attaques">Attaques Normal:</span></br>
                            Efficaces contre les Pokémon du type suivant : <span class="attaques_effec">aucun.</span></br>
                            Peu efficaces contre les Pokémon du type suivant : <span class="attaques_less_effec">Acier, Roche.</span></br>
                            Inefficaces contre les Pokémon du type suivant : <span class="attaques_no_effec">Spectre.</span></br>
                            </span></td>

                            <td class="your_type"><a href="pokemon_liste.php?id_type=12" style="color: #be411f; text-decoration: none;">Feu<span class="text_describe">
                            <span class="titre_pokemon">Pokémon Feu:</span></br>
                            Résistants aux attaques du type suivant : <span class="pokemon_resistence">Fée, Plante, Insecte.</span></br>
                            Vulnérables aux attaques du type suivant : <span class="pokemon_no_resistence">Eau, Sol, Roche.</span></br>
                            Invincibles aux attaques du type suivant : <span class="pokemon_invincible">aucun.</span></br></br>
                            <span class="titre_attaques">Attaques Feu:</span></br>
                            Efficaces contre les Pokémon du type suivant de Pokémon: <span class="attaques_effec">Plante, Acier, Insecte, Glace.</span></br>
                            Peu efficaces contre les Pokémon du type suivant : <span class="attaques_less_effec">Feu, Eau, Roche, Dragon.</span></br>
                            Inefficaces contre les Pokémon du type suivant : <span class="attaques_no_effec">aucun.</span></br>
                            </span></td>

                            <td class="your_type"><a href="pokemon_liste.php?id_type=1" style="color: #a8601a; text-decoration: none;">Combat<span class="text_describe">
                            <span class="titre_pokemon">Pokémon Combat:</span></br>
                            Résistants aux attaques du type suivant : <span class="pokemon_resistence">Ténèbres, Insecte, Roche.</span></br>
                            Vulnérables aux attaques du type suivant : <span class="pokemon_no_resistence">Vol, Fée, Psy.</span></br>
                            Invincibles aux attaques du type suivant : <span class="pokemon_invincible">aucun.</span></br></br>
                            <span class="titre_attaques">Attaques Combat:</span></br>
                            Efficaces contre les Pokémon du type suivant : <span class="attaques_effec">Normal, Acier, Ténèbres, Glace, Roche.</span></br>
                            Peu efficaces contre les Pokémon du type suivant : <span class="attaques_less_effec">Vol, Fée, Poison, Insecte, Psy.</span></br>
                            Inefficaces contre les Pokémon du type suivant : <span class="attaques_no_effec">Spectre.</span></br>
                            </span></td>

                            <td class="your_type"><a href="pokemon_liste.php?id_type=4" style="color: #1583c1; text-decoration: none;">Eau<span class="text_describe">
                            <span class="titre_pokemon">Pokémon Eau:</span></br>
                            Résistants aux attaques du type suivant : <span class="pokemon_resistence">Feu, Acier, Glace.</span></br>
                            Vulnérables aux attaques du type suivant : <span class="pokemon_no_resistence">Plante, Électrik.</span></br>
                            Invincibles aux attaques du type suivant : <span class="pokemon_invincible">aucun.</span></br></br>
                            <span class="titre_attaques">Attaques Eau:</span></br>
                            Efficaces contre les Pokémon du type suivant : <span class="attaques_effec">Feu, Sol, Roche.</span></br>
                            Peu efficaces contre les Pokémon du type suivant : <span class="attaques_less_effec">Eau, Plante, Dragon.</span></br>
                            Inefficaces contre les Pokémon du type suivant : <span class="attaques_no_effec">aucun.</span></br>
                            </span></td>

                            <td class="your_type"><a href="pokemon_liste.php?id_type=11" style="color: #7bc3eb; text-decoration: none;">Vol<span style="margin-left: -150%;" class="text_describe">
                            <span class="titre_pokemon">Pokémon Vol:</span></br>
                            Résistants aux attaques du type suivant : <span class="pokemon_resistence">Combat, Plante, Insecte.</span></br>
                            Vulnérables aux attaques du type suivant : <span class="pokemon_no_resistence">Électrik, Glace, Roche.</span></br>
                            Invincibles aux attaques du type suivant : <span class="pokemon_invincible">Sol.</span></br></br>
                            <span class="titre_attaques">Attaques Vol:</span></br>
                            Efficaces contre les Pokémon du type suivant : <span class="attaques_effec">Combat, Plante, Insecte.</span></br>
                            Peu efficaces contre les Pokémon du type suivant : <span class="attaques_less_effec">Acier, Électrik, Roche.</span></br>
                            Inefficaces contre les Pokémon du type suivant : <span class="attaques_no_effec">aucun.</span></br>
                            </span></td>

                        </tr>
                        <tr>

                            <td class="your_type"><a href="pokemon_liste.php?id_type=7" style="color: #f1cee2; text-decoration: none;">Fée<span class="text_describe">
                            <span class="titre_pokemon">Pokémon Fée:</span></br>
                            Résistants aux attaques du type suivant : <span class="pokemon_resistence">Combat, Ténèbres, Insecte.</span></br>
                            Vulnérables aux attaques du type suivant : <span class="pokemon_no_resistence">Acier, Poison.</span></br>
                            Invincibles aux attaques du type suivant : <span class="pokemon_invincible">Dragon.</span></br></br>
                            <span class="titre_attaques">Attaques Fée:</span></br>
                            Efficaces contre les Pokémon du type suivant : <span class="attaques_effec">Combat, Ténèbres, Dragon.</span></br>
                            Peu efficaces contre les Pokémon du type suivant : <span class="attaques_less_effec">Feu, Acier, Poison.</span></br>
                            Inefficaces contre les Pokémon du type suivant : <span class="attaques_no_effec">aucun.</span></br>
                            </span></td>

                            <th colspan="3" rowspan="4">Survolez votre type pour analyser ses points forts et ses points faibles</th>

                            <td class="your_type"><a href="pokemon_liste.php?id_type=2" style="color: #2e845d; text-decoration: none;">Plante<span style="margin-left: -150%;" class="text_describe">
                            <span class="titre_pokemon">Pokémon Plante:</span></br>
                            Résistants aux attaques du type suivant : <span class="pokemon_resistence">Eau, Plante, Électrik, Sol.</span></br>
                            Vulnérables aux attaques du type suivant : <span class="pokemon_no_resistence">Feu, Vol, Poison, Insecte, Glace.</span></br>
                            Invincibles aux attaques du type suivant : <span class="pokemon_invincible">aucun.</span></br></br>
                            <span class="titre_attaques">Attaques Plante:</span></br>
                            Efficaces contre les Pokémon du type suivant : <span class="attaques_effec">Eau, Sol, Roche.</span></br>
                            Peu efficaces contre les Pokémon du type suivant : <span class="attaques_less_effec">Feu, Vol, Plante, Acier, Poison, Dragon, Insecte.</span></br>
                            Inefficaces contre les Pokémon du type suivant : <span class="attaques_no_effec">aucun.</span></br>
                            </span></td>

                        </tr>
                        <tr>
                            <td class="your_type"><a href="pokemon_liste.php?id_type=9" style="color: #707777; text-decoration: none;">Acier<span class="text_describe">
                            <span class="titre_pokemon">Pokémon Acier:</span></br>
                            Résistants aux attaques du type suivant : <span class="pokemon_resistence">Normal, Vol, Fée, Plante, Acier, Dragon, Insecte, Glace, Roche, Psy.</span></br>
                            Vulnérables aux attaques du type suivant : <span class="pokemon_no_resistence">Feu, Combat, Sol.</span></br>
                            Invincibles aux attaques du type suivant : <span class="pokemon_invincible">Poison.</span></br></br>
                            <span class="titre_attaques">Attaques Acier:</span></br>
                            Efficaces contre les Pokémon du type suivant : <span class="attaques_effec">Fée, Glace, Roche.</span></br>
                            Peu efficaces contre les Pokémon du type suivant : <span class="attaques_less_effec">Feu, Eau, Acier, Électrik.</span></br>
                            Inefficaces contre les Pokémon du type suivant : <span class="attaques_no_effec">aucun.</span></br>
                            </span></td>

                            <td class="your_type"><a href="pokemon_liste.php?id_type=10" style="color: #66007c; text-decoration: none;">Poison<span style="margin-left: -150%;" class="text_describe">
                            <span class="titre_pokemon">Pokémon Poison:</span></br>
                            Résistants aux attaques du type suivant : <span class="pokemon_resistence">Combat, Fée, Plante, Poison, Insecte.</span></br>
                            Vulnérables aux attaques du type suivant : <span class="pokemon_no_resistence">Sol, Psy.</span></br>
                            Invincibles aux attaques du type suivant : <span class="pokemon_invincible">aucun.</span></br></br>
                            <span class="titre_attaques">Attaques Poison:</span></br>
                            Efficaces contre les Pokémon du type suivant : <span class="attaques_effec">Fée, Plante.</span></br>
                            Peu efficaces contre les Pokémon du type suivant : <span class="attaques_less_effec">Poison, Spectre, Sol, Roche.</span></br>
                            Inefficaces contre les Pokémon du type suivant : <span class="attaques_no_effec">Acier.</span></br>
                            </span></td>

                        </tr>
                        <tr>
                            <td class="your_type"><a href="pokemon_liste.php?id_type=18" style="color: #000000; text-decoration: none;">Ténèbres<span class="text_describe">
                            <span class="titre_pokemon">Pokémon Ténèbres:</span></br>
                            Résistants aux attaques du type suivant : <span class="pokemon_resistence">Spectre, Ténèbres.</span></br>
                            Vulnérables aux attaques du type suivant : <span class="pokemon_no_resistence">Combat, Fée, Insecte.</span></br>
                            Invincibles aux attaques du type suivant : <span class="pokemon_invincible">Psy.</span></br></br>
                            <span class="titre_attaques">Attaques Ténèbres:</span></br>
                            Efficaces contre les Pokémon du type suivant : <span class="attaques_effec">Spectre, Psy.</span></br>
                            Peu efficaces contre les Pokémon du type suivant : <span class="attaques_less_effec">Combat, Fée, Ténèbres.</span></br>
                            Inefficaces contre les Pokémon du type suivant : <span class="attaques_no_effec">aucun.</span></br>
                            </span></td>

                            <td class="your_type"><a href="pokemon_liste.php?id_type=15" style="color: #a2b800; text-decoration: none;">Électrik<span style="margin-left: -150%;" class="text_describe">
                            <span class="titre_pokemon">Pokémon Électrik:</span></br>
                            Résistants aux attaques du type suivant : <span class="pokemon_resistence">Vol, Acier, Électrik.</span></br>
                            Vulnérables aux attaques du type suivant : <span class="pokemon_no_resistence">Sol.</span></br>
                            Invincibles aux attaques du type suivant : <span class="pokemon_invincible">aucun.</span></br></br>
                            <span class="titre_attaques">Attaques Électrik:</span></br>
                            Efficaces contre les Pokémon du type suivant : <span class="attaques_effec">Eau, Vol.</span></br>
                            Peu efficaces contre les Pokémon du type suivant : <span class="attaques_less_effec">Plante, Électrik, Dragon.</span></br>
                            Inefficaces contre les Pokémon du type suivant : <span class="attaques_no_effec">Sol.</span></br>
                            </span></td>

                        </tr>
                        <tr>
                            <td class="your_type"><a href="pokemon_liste.php?id_type=13" style="color: #8844b0; text-decoration: none;">Spectre<span class="text_describe_low">
                            <span class="titre_pokemon">Pokémon Spectre:</span></br>
                            Résistants aux attaques du type suivant : <span class="pokemon_resistence">Poison, Insecte.</span></br>
                            Vulnérables aux attaques du type suivant : <span class="pokemon_no_resistence">Ténèbres, Spectre.</span></br>
                            Invincibles aux attaques du type suivant : <span class="pokemon_invincible">Normal, Combat.</span></br></br>
                            <span class="titre_attaques">Attaques Spectre:</span></br>
                            Efficaces contre les Pokémon du type suivant : <span class="attaques_effec">Spectre, Psy.</span></br>
                            Peu efficaces contre les Pokémon du type suivant : <span class="attaques_less_effec">Ténèbres.</span></br>
                            Inefficaces contre les Pokémon du type suivant : <span class="attaques_no_effec">Normal.</span></br>
                            </span></td>

                            <td class="your_type"><a href="pokemon_liste.php?id_type=16" style="color: #ba9247; text-decoration: none;">Sol<span style="margin-left: -150%;" class="text_describe_low">
                            <span class="titre_pokemon">Pokémon Sol:</span></br>
                            Résistants aux attaques du type suivant : <span class="pokemon_resistence">Poison, Roche.</span></br>
                            Vulnérables aux attaques du type suivant : <span class="pokemon_no_resistence">Eau, Plante, Glace.</span></br>
                            Invincibles aux attaques du type suivant : <span class="pokemon_invincible">Électrik.</span></br></br>
                            <span class="titre_attaques">Attaques Sol:</span></br>
                            Efficaces contre les Pokémon du type suivant : <span class="attaques_effec">Feu, Acier, Poison, Électrik, Roche.</span></br>
                            Peu efficaces contre les Pokémon du type suivant : <span class="attaques_less_effec">Plante, Insecte.</span></br>
                            Inefficaces contre les Pokémon du type suivant : <span class="attaques_no_effec">Vol.</span></br>
                            </span></td>

                        </tr>
                        <tr>
                            <td class="your_type"><a href="pokemon_liste.php?id_type=3" style="color: #4841f2; text-decoration: none;">Dragon<span class="text_describe_below">
                            <span class="titre_pokemon">Pokémon Dragon:</span></br>
                            Résistants aux attaques du type suivant : <span class="pokemon_resistence">Feu, Eau, Plante, Électrik.</span></br>
                            Vulnérables aux attaques du type suivant : <span class="pokemon_no_resistence">Fée, Dragon, Glace.</span></br>
                            Invincibles aux attaques du type suivant : <span class="pokemon_invincible">aucun.</span></br></br>
                            <span class="titre_attaques">Attaques Dragon:</span></br>
                            Efficaces contre les Pokémon du type suivant : <span class="attaques_effec">Dragon.</span></br>
                            Peu efficaces contre les Pokémon du type suivant : <span class="attaques_less_effec">Acier.</span></br>
                            Inefficaces contre les Pokémon du type suivant : <span class="attaques_no_effec">Fée.</span></br>
                            </span></td>

                            <td class="your_type"><a href="pokemon_liste.php?id_type=5" style="color: #78c5b1; text-decoration: none;">Insecte<span class="text_describe_below">
                            <span class="titre_pokemon">Pokémon Insecte:</span></br>
                            Résistants aux attaques du type suivant : <span class="pokemon_resistence">Combat, Plante, Sol.</span></br>
                            Vulnérables aux attaques du type suivant : <span class="pokemon_no_resistence">Feu, Vol, Roche.</span></br>
                            Invincibles aux attaques du type suivant : <span class="pokemon_invincible">aucun.</span></br></br>
                            <span class="titre_attaques">Attaques Insecte:</span></br>
                            Efficaces contre les Pokémon du type suivant : <span class="attaques_effec">Plante, Ténèbres, Psy.</span></br>
                            Peu efficaces contre les Pokémon du type suivant : <span class="attaques_less_effec">Combat, Feu, Vol, Fée, Acier, Poison, Spectre.</span></br>
                            Inefficaces contre les Pokémon du type suivant : <span class="attaques_no_effec">aucun.</span></br>
                            </span></td>

                            <td class="your_type"><a href="pokemon_liste.php?id_type=14" style="color: #8acdf2; text-decoration: none;">Glace<span class="text_describe_below">
                            <span class="titre_pokemon">Pokémon Glace:</span></br>
                            Résistants aux attaques du type suivant : <span class="pokemon_resistence">Glace.</span></br>
                            Vulnérables aux attaques du type suivant : <span class="pokemon_no_resistence">Feu, Combat, Acier, Roche.</span></br>
                            Invincibles aux attaques du type suivant : <span class="pokemon_invincible">aucun.</span></br></br>
                            <span class="titre_attaques">Attaques Glace:</span></br>
                            Efficaces contre les Pokémon du type suivant : <span class="attaques_effec">Vol, Plante, Sol, Dragon.</span></br>
                            Peu efficaces contre les Pokémon du type suivant : <span class="attaques_less_effec">Feu, Eau, Acier, Glace.</span></br>
                            Inefficaces contre les Pokémon du type suivant : <span class="attaques_no_effec">aucun.</span></br>
                            </span></td>

                            <td class="your_type"><a href="pokemon_liste.php?id_type=17" style="color: #7e5915; text-decoration: none;">Roche<span class="text_describe_below">
                            <span class="titre_pokemon">Pokémon Roche:</span></br>
                            Résistants aux attaques du type suivant : <span class="pokemon_resistence">Normal, Feu, Vol, Poison.</span></br>
                            Vulnérables aux attaques du type suivant : <span class="pokemon_no_resistence">Combat, Eau, Plante, Acier, Sol.</span></br>
                            Invincibles aux attaques du type suivant : <span class="pokemon_invincible">aucun.</span></br></br>
                            <span class="titre_attaques">Attaques Roche:</span></br>
                            Efficaces contre les Pokémon du type suivant : <span class="attaques_effec">Feu, Vol, Insecte, Glace.</span></br>
                            Peu efficaces contre les Pokémon du type suivant : <span class="attaques_less_effec">Combat, Acier, Sol.</span></br>
                            Inefficaces contre les Pokémon du type suivant : <span class="attaques_no_effec">aucun.</span></br>
                            </span></td>

                            <td class="your_type"><a href="pokemon_liste.php?id_type=6" style="color: #c525d5; text-decoration: none;">Psy<span style="margin-left: -150%;" class="text_describe_below">
                            <span class="titre_pokemon">Pokémon Psy:</span></br>
                            Résistants aux attaques du type suivant : <span class="pokemon_resistence">Combat, Psy.</span></br>
                            Vulnérables aux attaques du type suivant : <span class="pokemon_no_resistence">Ténèbres, Spectre, Insecte.</span></br>
                            Invincibles aux attaques du type suivant : <span class="pokemon_invincible">aucun.</span></br></br>
                            <span class="titre_attaques">Attaques Psy:</span></br>
                            Efficaces contre les Pokémon du type suivant : <span class="attaques_effec">Combat, Poison.</span></br>
                            Peu efficaces contre les Pokémon du type suivant : <span class="attaques_less_effec">Acier, Psy.</span></br>
                            Inefficaces contre les Pokémon du type suivant : <span class="attaques_no_effec">Ténèbres.</span></br>
                            </span></td>

                        </tr>
                    </table>
                </div>
                <footer>
                    <p>Pour accéder à la liste numérique de l'ensemble des Pokémons cités précédemment, cliquez <a href="pokemon_liste.php" style="color: #cf6ac5; text-decoration: none; font-style: italic;">ici</a> !</p>
                    <p>Si vous voulez simplement revenir à la page des types, cliquez <a href="index.php" style="color: #cf6ac5; text-decoration: none; font-style: italic;">là</a> !</p>
                </footer>
            </section>
        </div>
    </body>
</html>