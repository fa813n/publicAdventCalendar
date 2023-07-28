<?php
$title = 'Bienvenue chez le lutin facetieux';
ob_start(); ?>
	<h1>Que voulez-vous faire?</h1>
		<p>choisissez parmis les options suivantes:</p>
	<ul>
		<li>Voir un exemple de calendrier</li>
		<li>creer un calendrier</li>
		<li>Editer un calendrier</li>
	</ul>

<?php $content = ob_get_clean(); ?>
<?php
echo 'le fichier src/controllers/defzultPage.php est bien inclus';
require('./templates/layouts/mainPageLayout.php');
?>
