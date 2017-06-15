<?php
	require_once('php/Email.class.php');
	
	//Display success messages
	if(isset($_SESSION['success'])) {
		foreach($_SESSION['success'] as $success)
		{
			$html .= '<script>$.growl.notice({ title : "Succès", message: "'.$success.'" });</script>';
		}
		unset($_SESSION['success']);
	}
	//Display warning messages
	if(isset($_SESSION['warning'])) {
		foreach($_SESSION['warning'] as $warning)
		{
			$html .= '<script>$.growl.warning({ title : "Attention", message: "'.$warning.'" });</script>';
		}
		unset($_SESSION['warning']);
	}
	//Display error messages
	if(isset($_SESSION['error'])) {
		foreach($_SESSION['error'] as $error)
		{
			$html .= '<script>$.growl.error({ title : "Erreur", message: "'.$error.'" });</script>';
		}
		unset($_SESSION['error']);
	}	
	if(isset($_POST['contactButton'])) {
		if(isset($_POST['contactName']) && $_POST['contactName'] != null) {
			$email = new Email();
			$email->formulaireContact($_POST['contactName'], $_POST['contactEmail'], $_POST['contactContent']);
		}
	}	
	if(isset($_POST['cvButton'])) {
		$email = new Email();
		$email->sendCV($_POST['cvNom'], $_POST['cvPrenom'], $_POST['cvTelephone'], $_POST['cvEmail'], $_POST['cvAdresse'], $_POST['cvNpa'], $_POST['cvVille'], $_POST['cvFile']);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
    <link href="css/main.css" rel='stylesheet' type='text/css'>
    <link href="css/sandwich.css" rel='stylesheet' type='text/css'>
    <link href="css/svg.css" rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js"></script>
    <script src="js/loadSvg.js"></script>
    <script src="js/loadLogo.js"></script>
    <script src="js/scroll.js"></script>
	<script src="js/jquery.growl.js"></script>


</head>
<body>

<div id="player">
    <audio controls autoplay hidden>
        <source src="music/music" type="audio/mpeg">
    </audio>
</div>

<nav class="navbarScroll navbar navbar-default navbar-fixed-top">
    <div class="menu" id="menu">
        <ul>
            <li><a class="scrollTo" id="animate1" href="#section1">accueil</a></li>
            <li><a class="scrollTo" id="animate2" href="#section2">menu</a></li>
            <li><a class="scrollTo" id="animate3" href="#section3">commander</a></li>
            <li><a class="scrollTo" id="animate4" href="#section4">contact</a></li>
            <li><a class="scrollTo" id="animate5" href="#section5">staff</a></li>
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
                    <div>

                        <p class="text-mainsection">
                            <span class="guillemets">"</span>Crée ton sandwich. Goûte la différence.<span
                                class="guillemets">"</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="scrollTo" href="#section2">
            <img src="img/down-arrow.svg" class="svg arrow">
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
                        <th>1/3</th>
                        <th>1/2</th>
                        <th>2/3</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><img src="img/bread.svg" class="legume"></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>Français</td>
                        <td>4,50</td>
                        <td>5,10</td>
                        <td>6,00</td>

                    </tr>
                    <tr>
                        <td>Céréal</td>
                        <td>5,20</td>
                        <td>6,00</td>
                        <td>6,80</td>
                    </tr>
                    <tr>
                        <td>Portugais</td>
                        <td>5,80</td>
                        <td>6,50</td>
                        <td>7,20</td>
                    </tr>
                    <tr>
                        <td><img src="img/salad.svg" class="legume"></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>Laitue</td>
                        <td>0,40</td>
                        <td>0,40</td>
                        <td>0,40</td>

                    </tr>
                    <tr>
                        <td>Feuille de chêne</td>
                        <td>0,40</td>
                        <td>0,40</td>
                        <td>0,40</td>
                    </tr>
                    <tr>
                        <td>Tomate</td>
                        <td>0,40</td>
                        <td>0,40</td>
                        <td>0,40</td>
                    </tr>
                    <tr>
                        <td>Oignon</td>
                        <td>0,40</td>
                        <td>0,40</td>
                        <td>0,40</td>
                    </tr>

                    <tr>
                        <td><img src="img/meat.svg" class="legume"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Jambon</td>
                        <td>0,60</td>
                        <td>0,60</td>
                        <td>0,60</td>
                    </tr>
                    <tr>
                        <td>Salami</td>
                        <td>0,60</td>
                        <td>0,60</td>
                        <td>0,60</td>
                    </tr>
                    <tr>
                        <td>Mortadelle</td>
                        <td>0,60</td>
                        <td>0,60</td>
                        <td>0,60</td>
                    </tr>
                    <tr>
                        <td>Lard</td>
                        <td>0,60</td>
                        <td>0,60</td>
                        <td>0,60</td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <table class="table menu-text menu-table">
                    <thead class="menu-text-entete">
                    <tr>
                        <th>Ingredients</th>
                        <th>1/3</th>
                        <th>1/2</th>
                        <th>2/3</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <tr>
                        <td><img src="img/fish.svg" class="legume"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Saumon</td>
                        <td>1,20</td>
                        <td>1,20</td>
                        <td>1,20</td>
                    </tr>
                    <tr>
                        <td><img src="img/cheese.svg" class="legume"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Cheddar</td>
                        <td>0,50</td>
                        <td>0,50</td>
                        <td>0,50</td>
                    </tr>
                    <tr>
                        <td>Emmental</td>
                        <td>0,50</td>
                        <td>0,50</td>
                        <td>0,50</td>
                    </tr>
                    <tr>
                        <td>Mozzarella</td>
                        <td>0,50</td>
                        <td>0,50</td>
                        <td>0,50</td>
                    </tr>
                    <tr>
                        <td>Brie</td>
                        <td>0,50</td>
                        <td>0,50</td>
                        <td>0,50</td>
                    </tr>
                    <tr>
                        <td>Raclette</td>
                        <td>0,50</td>
                        <td>0,50</td>
                        <td>0,50</td>
                    </tr>
                    <tr>
                        <td>Edam</td>
                        <td>0,50</td>
                        <td>0,50</td>
                        <td>0,50</td>
                    </tr>
                    <tr>
                        <td><img src="img/plus.svg" class="legume"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Cornichon</td>
                        <td>0,40</td>
                        <td>0,40</td>
                        <td>0,40</td>
                    </tr>
                    <tr>
                        <td>Oeuf</td>
                        <td>0,40</td>
                        <td>0,40</td>
                        <td>0,40</td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <table class="table menu-text menu-table">
                    <thead class="menu-text-entete">
                    <tr>
                        <th>Ingredients</th>
                        <th>1/3</th>
                        <th>1/2</th>
                        <th>2/3</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <tr>
                        <td><img src="img/sauce.svg" class="legume"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Beurre</td>
                        <td>0,20</td>
                        <td>0,20</td>
                        <td>0,20</td>
                    </tr>
                    <tr>
                        <td>Moutard</td>
                        <td>0,20</td>
                        <td>0,20</td>
                        <td>0,20</td>
                    </tr>
                    <tr>
                        <td>Mayonnaise</td>
                        <td>0,20</td>
                        <td>0,20</td>
                        <td>0,20</td>
                    </tr>
                    <tr>
                        <td>Huile d'olive</td>
                        <td>0,20</td>
                        <td>0,20</td>
                        <td>0,20</td>
                    </tr>
                    <tr>
                        <td>Pesto</td>
                        <td>0,20</td>
                        <td>0,20</td>
                        <td>0,20</td>
                    </tr>
                    <tr>
                        <td>Sauce tartare</td>
                        <td>0,20</td>
                        <td>0,20</td>
                        <td>0,20</td>
                    </tr>
                    <tr>
                        <td>Sauce cocktail</td>
                        <td>0,20</td>
                        <td>0,20</td>
                        <td>0,20</td>
                    </tr>
                    <tr>
                        <td>Sauce curry</td>
                        <td>0,20</td>
                        <td>0,20</td>
                        <td>0,20</td>
                    </tr>
                    <tr>
                        <td>Miel</td>
                        <td>0,20</td>
                        <td>0,20</td>
                        <td>0,20</td>
                    </tr>
                    <tr>
                        <td>Confiture</td>
                        <td>0,20</td>
                        <td>0,20</td>
                        <td>0,20</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="scrollTo" href="#section3">
            <img src="img/down-arrow.svg" class="arrow">
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
            <div class="col-md-9 col-sm-9">
                <div>
                    <img src="img/sandwich.svg" class="svg"/>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div id="hello" style="color:white">hello</div>


                <div class="row">
                    <select class="select" id="bread">
                        <div class="options">
                        <option selected="selected" disabled="disabled">Types de baguettes</option>
                        <option value="cr">Céréales</option>
                        <option value="fr">Française</option>
                        <option value="pt">Portugaises</option>
                        </div>
                    </select>
                </div>
                <div class="row">
                    <select class="select" id="multiselect" onclick="showCheckboxes()">
                        <option selected="selected" disabled="disabled">Sélectionne tes ingrédients</option>
                    </select>
                    <div id="checkboxes">
                        <label for="salad">
                            <input type="checkbox" id="salad"/>Laitue</label>
                        <label for="chene">
                            <input type="checkbox" id="chene"/>Feuilles de chêne</label>
                        <label for="ham">
                            <input type="checkbox" id="ham"/>Jambon</label>
                        <label for="salami">
                            <input type="checkbox" id="salami"/>Salami</label>
                        <label for="morta">
                            <input type="checkbox" id="morta"/>Mortadelle</label>
                        <label for="bacon">
                            <input type="checkbox" id="bacon"/>Lard</label>
                        <label for="salmon">
                            <input type="checkbox" id="salmon"/>Saumon</label>
                        <label for="cheddar">
                            <input type="checkbox" id="cheddar"/>Cheddar</label>
                        <label for="edam">
                            <input type="checkbox" id="edam"/>Edam</label>
                        <label for="mozza">
                            <input type="checkbox" id="mozza"/>Mozzarella</label>
                        <label for="brie">
                            <input type="checkbox" id="brie"/>Brie</label>
                        <label for="raclette">
                            <input type="checkbox" id="raclette"/>Raclette</label>
                        <label for="pickle">
                            <input type="checkbox" id="pickle"/>Cornichons</label>
                        <label for="egg">
                            <input type="checkbox" id="egg"/>Oeufs</label>
                        <label for="ognon">
                            <input type="checkbox" id="ognon"/>Ognons</label>
                        <label for="salad2">
                            <input type="checkbox" id="salad2"/>Laitue 2ème feuille</label>
                        <label for="tomato">
                            <input type="checkbox" id="tomato"/>Tomates</label>
                        <label for="chene2">
                            <input type="checkbox" id="chene2"/>Feuilles de chêne 2ème feuille</label>
                    </div>
                </div>
                <div class="row">
                    <select class="select" id="sauce">
                        <option selected="selected" disabled="disabled">Choisissez votre sauce</option>
                        <option value="beurre">Beurre</option>
                        <option value="moutarde">Moutarde</option>
                        <option value="mayonnaise">Mayonnaise</option>
                        <option value="olive">Huile d'olive</option>
                        <option value="pesto">Pesto</option>
                        <option value="tartare">Sauce tartare</option>
                        <option value="cocktail">Sauce cocktail</option>
                        <option value="curry">Sauce curry</option>
                        <option value="miel">Miel</option>
                        <option value="confiture">Confiture</option>
                    </select>
                </div>
                <div class="row">
                    <select class="select" id="size">
                        <div class="options">
                            <option selected="selected" disabled="disabled">Tailles</option>
                            <option value="1/3">1/3</option>
                            <option value="1/2">1/2</option>
                            <option value="2/3">2/3</option>
                        </div>
                    </select>
                </div>
                <div class="row">
                    Total
                </div>
            </div>
        </div>

        <div>

            <script>
                var expanded = false;

                function showCheckboxes() {
                    var checkboxes = document.getElementById("checkboxes");
                    if (!expanded) {
                        checkboxes.style.display = "block";
                        expanded = true;
                    } else {
                        checkboxes.style.display = "none";
                        expanded = false;
                    }
                }
            </script>

        </div>

    </div>
    <div class="scrollTo" href="#section4">
        <img src="img/down-arrow.svg" class="arrow">
    </div>
    </div>
</section>


<section id="section4" class="background-section">
    <div class="container-fluid ">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title"><span><div
						class="title">Contacte-nous</div> </span>
				</div>
			</div>
		</div>
		<form name="contactForm" action="index.php" method="post">
			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<input class="form-control" name="contactName" type="text" placeholder="Nom"/>
						</div>
						<div class="col-md-6">
							<input class="form-control" name="contactEmail" type="text" placeholder="E-mail"/>
						</div>
					</div>
					<div class="row ">
						<div class="col-md-12">
							<textarea class="form-control" name="contactContent" rows="10"></textarea>
						</div>

					</div>
					<div class="row right">
						<div class="col-md-12">
							<button name="contactButton">Envoyer</button>
						</div>
					</div>
				</div>
				<div class="col-md-3">
				</div>
			</div>
			<div class="scrollTo" href="#section5">
				<img src="img/down-arrow.svg" class="arrow">
			</div>
		</form>
    </div>
</section>

<section id="section5" class="background-section">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title"><span><div
                        class="title">Jobs</div> </span>
				</div>
            </div>
        </div>
		<form name="contactForm" action="index.php" method="post">
			<div class="row">
				<div class="col-md-4 text-postule-list">
					Nom :
				</div>
				<div class="col-md-8 field-postule">
					<input class="form-control field-marge" type="text" name="cvNom" placeholder="Nom"/>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-4 text-postule-list">
					Prénom :
				</div>
				<div class="col-md-8 field-postule">
					<input class="form-control field-marge" type="text" name="cvPrenom" placeholder="Prénom"/>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-4 text-postule-list">
					Téléphone :
				</div>
				<div class="col-md-8 field-postule">
					<input class="form-control field-marge" type="text" name="cvTelephone" placeholder="Téléphone"/>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-4 text-postule-list">
					E-mail :
				</div>
				<div class="col-md-8 field-postule">
					<input class="form-control field-marge" type="text" name="cvEmail" placeholder="E-mail"/>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-4 text-postule-list">
					Adresse :
				</div>
				<div class="col-md-8 field-postule">
					<input class="form-control field-marge" type="text" name="cvAdresse" placeholder="Adresse"/>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-4 text-postule-list">
					Npa :
				</div>
				<div class="col-md-8 field-postule">
					<input class="form-control field-marge" type="text" name="cvNpa" placeholder="Npa"/>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-4 text-postule-list">
					Ville :
				</div>
				<div class="col-md-8 field-postule">
					<input class="form-control field-marge" type="text" name="cvVille" placeholder="Ville"/>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-4 text-postule-list">
					Curriculum Vitae :
				</div>
				<div class="col-md-8 field-postule">
					<div id="holder" >Glissez-déposez votre CV
						<input type="file" name="cvFile" id="fileName"/>
					</div>
				</div>
			</div>
			<div class="row send-postule">
				<div class="col-md-4 text-postule-list">
				</div>
				<div class="col-md-8 field-postule">
					<button name="cvButton">Envoyer</button>
				</div>
			</div>
		</form>
	</div>
</section>

<footer class="background-section-footer">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-sm-8">
                Mail : freshsandwich@gmail.com
                <p class="paddingFooter">Tel : 079 955 01 47</p>
            </div>
            <div class="col-sm-4 madeLove">
                made with <span class="heart heartbeat">&#9825;</span> in switzerland
            </div>
        </div>
    </div>
</footer>
<script src="js/sandwichCreation.js"></script>
<script src="js/dragAndDrop.js"></script>

</body>
</html>