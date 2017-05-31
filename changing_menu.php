<!-- MENU THAT CHANGES UPON BEING LOGGED IN AND LGOGED OUT -->
<?php
	if(secIsLoggedIn() && secCheckLevel() >= 90){
                            echo '<li><a href="index.php?side=bruger">Brugere</a></li>';
                            echo '<li><a href="index.php?side=opretInstruktor">Opret instruktør</a></li>';
	}

  	if(!secIsLoggedIn()) {
    		echo '<li><a href="index.php?side=opretBruger">Opret Bruger</a></li>';
    		echo '<li><a href="index.php?side=logind">Log Ind</a></li>';
  	} else {
    		echo '<li><a href="index.php?side=profil">Profil</a></li>';
  	}
?>

<!-- DROPDOWN MENU THAT CHANGES UPON BEING LOGGED IN OR LOGGED OUT -->

<?php
  	if(!secIsLoggedIn()) {
    		echo '<li><a href="index.php?side=logind">Log Ind</a></li>';    
  	} else {
    		echo '<li><a href="index.php?side=profil">Profil</a></li>';
		echo '<li class="divider"></li>';
    		echo '<li><a href="index.php?side=logud">Log ud</a></li>';
  	}
?>
