<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML & CSS</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-fiche-lecture.css">
    <link rel="shortcut icon" href="images/fiche-lecture/favicon.ico" type="image/x-icon">
    <?php include 'php/font.php' ?>
</head>

<body>
    <main>
        <?php include 'php/summary.php' ?>
        <section id="main-section">
            <section id="main-section-container-page">

                <div id="body-main">
                    <div id="fiche-lecture-container">
                        <header id="fiche-lecture-header">
                            <h1 id="fiche-lecture-h1">Html <strong id="fiche-lecture-header-title-esperluette">&</strong> Css</h1>
                        </header>
                        <main id="fiche-lecture-main">
                            <section class="fiche-lecture-section">
                                <h2 class="fiche-lecture-h2">Html : le fond</h2>
                                <article class="fiche-lecture-article"><strong class="bold-underline-title">Html</strong> signifie "<em id="fiche-lecture-em">HyperText Markup Language</em>" qu'on peut traduire par "langage de balises pour l'hypertexte". Il est utilisé afin de créer et de représenter le contenu d'une page web et sa structure. D'autres technologies sont utilisées avec HTML pour décrire la présentation d'une page (CSS) et/ou ses fonctionnalités interactives (JavaScript).</article>
                                <h3 class="fiche-lecture-h3">Les textes</h3>
                                <p>Avec les balises <strong class="bold-underline">h1-h6</strong> il est possible de définir des titres en respectant une logique de profondeur :</p>
                                <ul id="fiche-lecture-first-point">
                                    <li>h1 : 1. : Titre principal</li>
                                    <ul id="fiche-lecture-second-point">
                                        <li>h2 : 1.1. : sous-titre</li>
                                        <ul id="fiche-lecture-third-point">
                                            <li>h3 : 1.1.1 ...</li>
                                            <li>h3 : 1.1.2 ...</li>
                                            <li>h3 : 1.1.3 ...</li>
                                        </ul>
                                        <li>h2 : 1.2 : sous-titre</li>
                                        <li>h2 : 1.3 : sous-titre</li>
                                    </ul>
                                </ul>
                                <p>Pour représenter un paragraphe de texte courant la balise <strong class="bold-underline">p</strong> est parfaite.</p>
                                <p><strong class="bold-underline">&lt;strong&gt;</strong> et <strong class="bold-underline">&lt;em&gt;</strong> sont des balises permettant de définir des mots ou expressions <strong class="bold-underline">signifiants</strong> dans un texte courant.</p>
                            </section>
                            <section class="fiche-lecture-section">
                                <h2 class="fiche-lecture-h2">CSS : La forme</h2>
                                <article class="fiche-lecture-article"><strong class="bold-underline">CSS</strong> signifie "<em id="fiche-lecture-em">Cascading Style Sheets</em>", c'est un langage de feuille de style utilisé pour décrire la présentation d'un document écrit en HTML ou en XML. CSS décrit la façon dont les éléments doivent être affichés à l'écran sur du papier, en vocalisation, ou sur d'autres supports.</article>
                                <h3 class="fiche-lecture-h3">Anatomie d'une règle CSS</h3>
                                <img src="images/fiche-lecture/regle-CSS.png" alt="Anatomie d'une règle CSS">
                                <h4 class="fiche-lecture-h4">Sélecteur</h4>
                                <p>C'est le nom de l'élement HTML situé au début de l'ensemble de règles. Il permet de sélectionner les éléments sur lesquels appliquer le syle souhaité (en l'occurence, les élémens p). Pour mettre en dorme un élément différent, il suffit de changer le sélecteur.</p>
                                <h4 class="fiche-lecture-h4">Déclaration</h4>
                                <p>C'est une règle simple comme color: red; qui détermine les propriétés de l'élément que l'on veut mettre en forme.</p>
                                <h4 class="fiche-lecture-h4">Propriétés</h4>
                                <p>Les différentes façons dont on peut mettre en forme un élément HTML (dans ce cas, color est une propriété des éléments p). En CSS, vous choisissez les différentes propriétés que vous voulez utiliser dans une règle CSS.</p>
                                <h4 class="fiche-lecture-h4">Valeur de la propriété</h4>
                                <p>À droite de la propriété, après les deux points, on a la valeur de la propriété. Celle-ci permet de choisir une mise en forme parmi d'autres pour une propriété donnée (par exemple, il y a d'autres couleurs que red pour la propriété color).</p>
                            </section>
                        </main>
                        <footer id="fiche-lecture-footer">
                            <p>De plus amples informations sont disponibles sur les fiches récap ou sur le MDN</p>
                            <p id="fiche-lecture-footer-strong">Ressources :
                                <a href="https://htmlreference.io/" target="_blank">htmlreference</a> -
                                <a href="https://cssreference.io/" target="_blank">cssreference</a> -
                                <a href="https://developer.mozilla.org/fr/" target="_blank">MDN</a></b>
                            </p>
                        </footer>
                    </div>
                </div>

            </section>
        </section>
    </main>
</body>

</html>