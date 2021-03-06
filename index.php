<?php
	require_once('php/Email.class.php');
	
	if(isset($_POST['contactButton'])) {
		$email = new Email();
		$email->formulaireContact($_POST['contactName'], $_POST['contactEmail'], $_POST['contactContent']);
	}	
	if(isset($_POST['cvButton'])) {
		$email = new Email();
		$email->sendCV($_POST['cvNom'], $_POST['cvPrenom'], $_POST['cvTelephone'], $_POST['cvEmail'], $_POST['cvAdresse'], $_POST['cvNpa'], $_POST['cvVille']);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
    <link href="css/main.css" rel='stylesheet' type='text/css'>
    <link href="css/sandwich.css" rel='stylesheet' type='text/css'>
    <link href="css/svg.css" rel='stylesheet' type='text/css'>
    <script src="js/loadSvg.js"></script>
    <script src="js/loadLogo.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/sandwichCreation.js"></script>
    <script src="js/dragAndDrop.js"></script>
    <script src="js/priceTableFromJSON.js"></script>

    <script>
        $(document).ready(function () {
            loadJSONIngredient();
        });
    </script>
</head>
<body>

<div id="player">
    <audio controls autoplay hidden>
        <source src="music/music.mp3" type="audio/mpeg">
    </audio>
</div>

<nav class="navbarScroll navbar navbar-default navbar-fixed-top">
    <div class="menu" id="menu">
        <ul>
            <li><a class="scrollTo" id="animate1" href="#section1">Accueil</a></li>
            <li><a class="scrollTo" id="animate2" href="#section2">Menu</a></li>
            <li><a class="scrollTo" id="animate3" href="#section3">Commander</a></li>
            <li><a class="scrollTo" id="animate4" href="#section4">Contact</a></li>
            <li><a class="scrollTo" id="animate5" href="#section5">Jobs</a></li>
        </ul>
    </div>
</nav>


<section id="section1" class="background-section1">
    <div class=" container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="logo">
                        <img src="img/logo.svg" class="draw-logo svg"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p class="text-mainsection">
                            <span class="guillemets">"</span>Crée ton sandwich. Goûte la différence.<span
                                class="guillemets">"</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <span href="#section2" class="scrollTo"><img src="img/down-arrow.svg" class="svg arrow"></span>
        </div>
    </div>
</section>
<section id="section2" class="background-section">
    <div class=" container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title"><span><div
                        class="title">Menu</div> </span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <table class="table menu-text menu-table">
                    <thead class="menu-text-entete">
                    <tr>
                        <th>Ingredients</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody id="tableIngredient">

                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <table class="table menu-text menu-table">
                    <thead class="menu-text-entete">
                    <tr>
                        <th>Ingredients</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody id="tableIngredient2">

                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <table class="table menu-text menu-table">
                    <thead class="menu-text-entete">
                    <tr>
                        <th>Ingredients</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody id="tableIngredient3">

                    </tbody>
                </table>
            </div>
        </div>
        <div>
            <span href="#section3" class="scrollTo"><img src="img/down-arrow.svg" class="svg arrow"></span>
        </div>
    </div>
</section>


<section id="section3" class="background-section-green">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title"><span><div
                        class="title">Mon sandwich</div> </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="row">
                    <img src="img/sandwich.svg" class="svg"/>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="col-md-6 col-sm-6">
                    <select class="select multiselect" onclick="showCheckboxes('pains')" name="salut">
                        <option value="" hidden>Pains</option>
                    </select>
                    <div class="checkboxes" id="pains">
                        <label for="francaise">
                            <input type="radio" class="checkbox-pain" id="francaise" name="pain"
                                   value="0"/>Française</label>
                        <label for="cereales">
                            <input type="radio" class="checkbox-pain" id="cereales" name="pain"
                                   value="1"/>Céréales</label>
                        <label for="portugaise">
                            <input type="radio" class="checkbox-pain" id="portugaise" name="pain" value="2"/>Portugaise</label>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <select class="select multiselect" onclick="showCheckboxes('sauces')">
                        <option value="" hidden>Sauces</option>
                    </select>
                    <div class="checkboxes" id="sauces">
                        <label for="beurre">
                            <input type="radio" class="checkbox-sauce" id="beurre" name="sauce"
                                   value="0"/>Beurre</label>
                        <label for="moutarde">
                            <input type="radio" class="checkbox-sauce" id="moutarde" name="sauce"
                                   value="1"/>Moutarde</label>
                        <label for="mayonnaise">
                            <input type="radio" class="checkbox-sauce" id="mayonnaise" name="sauce" value="2"/>Mayonnaise</label>
                        <label for="huile">
                            <input type="radio" class="checkbox-sauce" id="huile" name="sauce" value="3"/>Huile
                            d'olive</label>
                        <label for="pesto">
                            <input type="radio" class="checkbox-sauce" id="pesto" name="sauce"
                                   value="4"/>Pesto</label>
                        <label for="tartare">
                            <input type="radio" class="checkbox-sauce" id="tartare" name="sauce" value="5"/>Sauce
                            tartare</label>
                        <label for="cocktail">
                            <input type="radio" class="checkbox-sauce" id="cocktail" name="sauce" value="6"/>Sauce
                            cocktail</label>
                        <label for="curry">
                            <input type="radio" class="checkbox-sauce" id="curry" name="sauce" value="7"/>Sauce
                            curry</label>
                        <label for="miel">
                            <input type="radio" class="checkbox-sauce" id="miel" name="sauce"
                                   value="8"/>Miel</label>
                        <label for="confiture">
                            <input type="radio" class="checkbox-sauce" id="confiture" name="sauce" value="9"/>Confiture</label>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <select class="select multiselect" onclick="showCheckboxes('legumes')">
                        <option value="" hidden>Légumes</option>
                    </select>
                    <div class="checkboxes" id="legumes">
                        <label for="laitue">
                            <input type="checkbox" class="checkbox-legume" id="laitue" value="0"/>Laitue</label>
                        <label for="chene">
                            <input type="checkbox" class="checkbox-legume" id="chene" value="1"/>Feuilles de
                            chêne</label>
                        <label for="tomates">
                            <input type="checkbox" class="checkbox-legume" id="tomates" value="2"/>Tomates</label>
                        <label for="ognons">
                            <input type="checkbox" class="checkbox-legume" id="ognons" value="3"/>Ognons</label>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <select class="select multiselect" onclick="showCheckboxes('viandes')">
                        <option value="" hidden>Viandes</option>
                    </select>
                    <div class="checkboxes" id="viandes">
                        <label for="jambon">
                            <input type="checkbox" class="checkbox-viande" id="jambon" value="0"/>Jambon</label>
                        <label for="salami">
                            <input type="checkbox" class="checkbox-viande" id="salami" value="1"/>Salami</label>
                        <label for="mortadelle">
                            <input type="checkbox" class="checkbox-viande" id="mortadelle"
                                   value="2"/>Mortadelle</label>
                        <label for="lard">
                            <input type="checkbox" class="checkbox-viande" id="lard" value="3"/>Lard</label>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <select class="select multiselect" onclick="showCheckboxes('fromages')">
                        <option value="" hidden>Fromages</option>
                    </select>
                    <div class="checkboxes" id="fromages">
                        <label for="cheddar">
                            <input type="checkbox" class="checkbox-fromage" id="cheddar" value="0"/>Cheddar</label>
                        <label for="edam">
                            <input type="checkbox" class="checkbox-fromage" id="edam" value="1"/>Edam</label>
                        <label for="mozzarella">
                            <input type="checkbox" class="checkbox-fromage" id="mozzarella"
                                   value="2"/>Mozzarella</label>
                        <label for="brie">
                            <input type="checkbox" class="checkbox-fromage" id="brie" value="3"/>Brie</label>
                        <label for="raclette">
                            <input type="checkbox" class="checkbox-fromage" id="raclette"
                                   value="4"/>Raclette</label>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <select class="select multiselect" onclick="showCheckboxes('poissons')">
                        <option value="" hidden>Poissons</option>
                    </select>
                    <div class="checkboxes" id="poissons">
                        <label for="saumon">
                            <input type="checkbox" class="checkbox-poisson" id="saumon" value="0"/>Saumon</label>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <select class="select multiselect" onclick="showCheckboxes('supplements')">
                        <option value="" hidden>Suppléments</option>
                    </select>
                    <div class="checkboxes" id="supplements">
                        <label for="cornichons">
                            <input type="checkbox" class="checkbox-sup" id="cornichons"
                                   value="0"/>Cornichons</label>
                        <label for="oeufs">
                            <input type="checkbox" class="checkbox-sup" id="oeufs" value="1"/>Oeufs</label>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <button type="button" class="button-commander">Commander</button>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div>


                        <table class="table menu-text menu-table">
                            <thead class="menu-text-entete">
                            <td>
                                Facture
                            </td>

                            </thead>
                            <tbody id="calcul">

                            </tbody>
                            <tfoot>
                            <td>Total</td>
                            <td id="total"></td>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div>


        </div>
        <div>
            <span href="#section4" class="scrollTo"><img src="img/down-arrow.svg" class="svg arrow"></span>
        </div>
    </div>
</section>


<section id="section4" class="background-sectionbis">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span><div class="title">Contacte-nous</div></span>
                </div>
            </div>
        </div>
        <form name="contactForm" action="index.php" method="post">
            <div class="row">
                <div class="col-lg-3 hidden-md hidden-sm hidden-xs">
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <input class="form-control" name="contactName" type="text" placeholder="Nom"/>
                        </div>
                        <div class="col-lg-6">
                            <input class="form-control" name="contactEmail" type="text" placeholder="E-mail"/>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-12">
                            <textarea class="form-control" name="contactContent" placeholder="Contenu du message"
                                      rows="10"></textarea>
                        </div>

                    </div>
                    <div class="row right">
                        <div class="col-lg-12">
                            <button name="contactButton" class="button-submit">Envoyer</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 hidden-md hidden-sm hidden-xs">
                </div>
            </div>
        </form>

        <div>
            <span href="#section5" class="scrollTo"><img src="img/down-arrow.svg" class="svg arrow"></span>
        </div>
    </div>
</section>

<section id="section5" class="background-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title"><span><div
                        class="title">Jobs</div> </span>
                </div>
            </div>
        </div>
        <form name="cvForm" action="index.php#section5" method="post">
            <div class="row">
                <div class="col-lg-5 text-postule-list hidden-md hidden-sm hidden-xs">
                    Nom :
                </div>
                <div class="col-lg-7 field-postule col-md-12">
                    <input class="form-control field-marge" type="text" placeholder="Nom" name="cvNom"/>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-5 text-postule-list hidden-md hidden-sm hidden-xs">
                    Prénom :
                </div>
                <div class="col-lg-7 field-postule col-md-12">
                    <input class="form-control field-marge" type="text" placeholder="Prénom" name="cvPrenom"/>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-5 text-postule-list hidden-md hidden-sm hidden-xs">
                    Téléphone :
                </div>
                <div class="col-lg-7 field-postule col-md-12">
                    <input class="form-control field-marge" type="text" placeholder="Téléphone" name="cvTelephone"/>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-5 text-postule-list hidden-md hidden-sm hidden-xs">
                    E-mail :
                </div>
                <div class="col-lg-7 field-postule col-md-12">
                    <input class="form-control field-marge" type="text" placeholder="E-mail" name="cvEmail"/>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-5 text-postule-list hidden-md hidden-sm hidden-xs">
                    Adresse :
                </div>
                <div class="col-lg-7 field-postule col-md-12">
                    <input class="form-control field-marge" type="text" placeholder="Adresse" name="cvAdresse"/>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-5 text-postule-list hidden-md hidden-sm hidden-xs">
                    Npa :
                </div>
                <div class="col-lg-7 field-postule col-md-12">
                    <input class="form-control field-marge" type="text" placeholder="Npa" name="cvNpa"/>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-5 text-postule-list hidden-md hidden-sm hidden-xs">
                    Ville :
                </div>
                <div class="col-lg-7 field-postule col-md-12">
                    <input class="form-control field-marge" type="text" placeholder="Ville" name="cvVille"/>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-5 text-postule-list hidden-md hidden-sm hidden-xs">
                    Curriculum Vitae :
                </div>
                <div class="col-lg-7 field-postule col-md-12" id="holderMax">
                    <div>Transmets nous ton CV
                        <button type="button" class="button-submit" id="goThoughtFile">Parcourir</button>
                        <input type="file" name="cvFile" id="fileName" style="display:none"/>
                        <div id="nameFileDrop"></div>
                    </div>
                </div>
            </div>
            <div class="row right">
                <div class="col-lg-7 send-postule col-md-12 col-sm-12 col-xs-12">
                    <button class="button-submit" name="cvButton">Envoyer</button>
                </div>
                <div class="col-lg-5"></div>
            </div>
        </form>
    </div>
</section>

<footer class="background-section-footer">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-sm-8">
                email : freshsandwich@gmail.com
                <p class="paddingFooter">Tel : 079 955 01 47</p>
            </div>
            <div class="col-sm-4 madeLove">
                made with
                <div class="heart heartbeat">&#9825;</div>
                in switzerland
            </div>
            <div></div>
        </div>
    </div>
</footer>
</body>
</html>