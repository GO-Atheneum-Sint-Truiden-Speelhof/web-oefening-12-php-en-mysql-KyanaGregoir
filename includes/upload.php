<div class="jumbotron">
	<h1 class="display-4">Je foto insturen</h1>
</div>
<div class="row">
	<div class="col-md tegel">
		<p>Bedankt voor je deelname! Dit is de informatie die je ons hebt 			doorgestuurd:</p>
		<?php
		// gegevens uit de sessie weergeven
		session_start();
		echo '<p>Naam: '.$_SESSION['naam'].'<br>
			Straat: '.$_SESSION['straat'].'<br>
            $_SESSION['postcode'] = $_POST['postcode'];
            $_SESSION['gemeente'] = $_POST['gemeente'];
            $_SESSION['telefoon'] = $_POST['telefoon'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['geboortedatum'] = $_POST['geboortedatum'];
            $_SESSION['titel'] = $_POST['titel'];
            $_SESSION['camera'] = $_POST['camera'];
            $_SESSION['lens'] = $_POST['lens'];
        	Commentaar: '.$_SESSION['commentaar'].'</p>';
		?>
	</div>
</div>
