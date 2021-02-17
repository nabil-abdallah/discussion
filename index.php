<?php
session_start();
include_once ('connexiondb.php');
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap" rel="stylesheet"> 
</head>
<body>
    <header>
		<h1>
			TSFteam
		</h1>		
		<!-- menu navigation -->
		<nav class="menu-nav">
			<ul class="boutton">
			<li>
			 <a href="deconnexion.php">Se déconnecter</a>	
			</li>
			<li>
				<a href="profil.php">Editer profil</a>
			</li>
			<li>
				 <a href="admin.php">Espace admin</a>
			</li>
			<li>
			<a href='discussion.php'>Discussion</a>
			</li>
</ul>
</nav>
</header>	
<main class="intro">
	 <div class="main-content">

                <div class="title-content">
                    <p class="content-header">The Irregular at Magic High School<br/>Discussion</p>
                    <br>
                    <p class="content-body">
                       The Irregular at Magic High School, connue au Japon sous le nom de Mahōka kōkō no rettōsei (魔法科高校の劣等生?, litt. « Le cancre d'une école de magie »), est une websérie japonaise écrite par Tsutomu Satō et publiée sur le site Shōsetsuka ni narō entre octobre 2008 et mars 20111. Satō a conclu un accord avec Dengeki Bunko, une collection de la maison d'édition japonaise ASCII Media Works (devenue par la suite celle de Kadokawa), et a commencé à publier son travail sous un format light novel depuis juillet 2011, avec des illustrations réalisées par Kana Ishida ; la série sera composée de trente-deux volumes2. La version française est éditée par Ofelbe depuis octobre 20163.

Plusieurs arcs narratifs de la série ont reçu une adaptation en manga par divers mangakas et sont publiées par ASCII Media Works et Square Enix. En 2013, une adaptation en série télévisée anime par Madhouse a été annoncée et est diffusée pour la première fois au Japon entre avril et septembre 2014. Dans les pays francophones, elle est diffusée en simulcast par Wakanim. Un film d'animation est également sorti le 17 juin 2017 au Japon. Une seconde saison par 8-Bit est diffusée entre octobre et décembre 2020 au Japon.
                    </p>
                </div>
            </div>
        </div>
</main>
<footer>
    <ul>
        <li>Connexion forever</li>
    </ul>
</footer>  
</body>
</html>
