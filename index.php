<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>mon petit site complet</title>
</head>
<body>



	<!-- haut de page -->
	<header>
		
		<nav class="recherche">
     <form action="rechercher" method="POST">
	      <label for="recherche">
		    <input type="recherche" id="recherche" name="recherche" placeholder="entrer votre recherche" required>
		    <button type="submit" class="btnrecherche"> Rechercher</button>
	 </form>
	 </nav>

	  <div id="logo">  
		  <a href="index.php"><img src="img/logo2.jpg" widht="50" height="47" alt="logo"></a> 
           <h1><a href="index.php">FAC-FAX</a></h1>
      </div>
     
	 

	</header>
    <nav class="navbar">
	  <nav class="menu-nav">
		<ul>
			<li class="btnhome"><a href="index.php"><img src="img/home.png" alt="home" width="25" height="25"></a></li>
			<li class="btn"><a href="contacts.html">Contacts</a></li>
			<li class="btn"><a href="aide.html">Aide</a></li>
			<li class="btnlogin"><a href="connexion.php">Connexion</a></li>
		</ul>	
	  </nav>
	  <img src="img/btn-menu.png" alt="menu button" width="30" height="30" class="menu-hamburger">
	</nav>


	<!-- contenu --> 

	

<div id="content">
		<div class="left-box">
			<nav class="btncontent1">
			<img src="img/epreuves.jpg" width="100%" height="100%">
			<h1><a href="epreuve.html">EPREUVES</a></h1>
		    </nav>
			<p>Ici vous trouverez les epreuves</p>	
		</div>


	   <div class="right-box">
	   	<nav class="btncontent2">
		  <img src="img/cours.jpg" width="100%" height="100%">
		  <h1><a href="cours.html" >COURS</a></h1>    
		  <p>Ici vous trouverez les cours</p>
	   </div>
	   </nav>	

</div>



	<!-- pieds de page  -->

	<footer>
		<div id="footer">
	<ul>
		<li><h2>A propos</h2></li>
			<li><a href="index.html"> Acceuil</a></li>
			<li><a href="cours.html">Cours</a></li>
			<li><a href="epreuve.html">Epreuves</a></li>
			<li><a href="contact.html">Contacts</a></li>
			<li><a href="aide.html">Aide</a></li>
		
		</ul>
		<ul>
		<li><h2>Plus</h2></li>
			<li><span class="facebook social"></span><a href="#"> Facebook</a></li>
			<li><span class="whatsapp social"></span><a href="#">Whatsapp</a></li>
	
		</ul>
		<ul>
		<li><h2>Contacts</h2></li>
			<li> 446 Ngaoundere</li>
			<li>Tel: 693676674
			         </br>     651887903</li>
			<li><a href="#">modestematims@gmail.com</a></li>
  </ul>
      <div id="copyright">
          &copy;  Tous droits  resevés..
      </div>
    </div>

	</footer>


</body>
<script src="js/script.js" async></script>
</html>