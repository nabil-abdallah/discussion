<?php 
session_start();

if (!empty($_POST['deco'])) {
	unset($_SESSION['login']);
	unset($_SESSION['password']);
	unset($_SESSION['profil']);
}
$db = mysqli_connect("localhost", "root", "", "discussion");
$query = "SELECT login, date, id_utilisateur, message FROM `utilisateurs` ,`messages` WHERE utilisateurs.id = id_utilisateur ORDER BY `messages`.`id` ASC";
$result = mysqli_query($db, $query);
$query1 = "SELECT id, message FROM `messages`";
$result1 = mysqli_query($db, $query1);
0.
?>

<!DOCTYPE html>
<html>
<head>
	<title>Discussion</title>
	<link rel="stylesheet" href="Style.css">
</head>
<body class="form">
	<header>
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
    </header>

    <main>

        <?php
            if ((isset($_SESSION['login'])) && (isset($_SESSION['password']))) 
            {
                ?>

<article class="espacecommentaire">
		<table>
			<tr>
				<td><strong>Utilisateur(s)</strong></td>
				<td><strong>Messages</strong></td>
			</tr>
            


           <?php
                header('Location:connexion.php');
            }
            $connexion = mysqli_connect("localhost", "root","", "discussion");        
            if(isset($_POST["comment"]))
            {
                $comment=$_POST["comment"];
            }      
            else 
            {
                $comment="";
            }   

            if (isset($_POST['confirm']))
            { 
                date_default_timezone_set("Europe/Paris");
                             
                $requete = "INSERT INTO messages (message, id_utilisateur, date) VALUES (\"$comment\",'".$_SESSION['id']."','".date("Y-m-d H:i:s")."')";

                $query = mysqli_query($connexion, $requete);

            }

        ?>  
                
         
        
        <h1 id="titrediscussion"><img src="img/tsf.png" width=10% ></h1>
    	   <section class="Allmessage">
    		
        		<div class="form">
        			<?php
    	                $connexion = mysqli_connect("localhost", "root", "", "discussion");
    	                $log = "SELECT id,login FROM utilisateurs";
    	                $com = "SELECT * FROM messages ORDER BY date DESC";
                        
                        
                        
    	               



    	                $i = 0;$resultat=null; 
    	                while($i < count($resultat))
    	                {
    	                    $i2 = 0;
    	                    while($i2 < count($resultat2))
    	                    {
    	                        if($resultat[$i][2] == $resultat2[$i2][0])
    	                        {
                                    
    	                            $date = $resultat[$i][3];
    	                            $date2 = date("d-m-Y à H:i:s",strtotime($date)); ?>


    	                            <section class='post'>
    	                               <div id="post2">Posté par <?php echo $resultat2[$i2][1]." le ".$date2 ?></div>
    	                               <div id="post2"><?php echo $resultat[$i][1] ?></div>
    	                               <br><br>
    	                            </section>
                                
    	                        <?php 
                                
                                }
                                

    	                        $i++;
    	                    }
    	                    $i2++;

    	                } 

                                          
                	?>
        			
        		</div>
        	</section>

        <section class="form">
            <?php
                if (isset($_SESSION['login'])): ?> 
                    
                        <div class='form'>
                            <form  class='formco' action='discussion.php' method='post'>

                                    <textarea type='text'  placeholder='Votre message' rows='25' cols='60' name='comment' id='comment' resize:none required></textarea><br>

                                    <input type='submit' value='Envoyer' name='confirm' />
                            </form>
                        </div>

                    <?php endif; ?>
                
            
        </section>

    	
    	
    </main>

</body>
</html>