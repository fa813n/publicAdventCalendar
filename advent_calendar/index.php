<?php
// les include seron à remplacer par des require
//include 'src/controllers/displayCalendar.php';
//include 'src/controllers/createCalendar.php';
include('src/controllers/defaultPage.php');
//include ('templates/layouts/mainPageLayout.php');

if (isset($_GET['action'])) {
	if ($_GET['action'] === 'displayCalendar'){
		if (isset ($_GET['user']) && isset ($_GET['mode'])) { // si un calendrier utilisateur est dëfini aknsi qu'un modec(user = affichage, adminDisplay = même chose avec un lien pour passer en mode edition, adminEdition = edition
			if ($_GET['mode'] === 'userDisplay') {
			
			}
			else if ($_GET['mode'] === 'adminEdition') {

			}
			else if ($GET['mode'] === 'adminDisplay') {

			}
		}
	}
}
else {
//	defaultPage();
}
