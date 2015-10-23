<?php
require_once '../inc/config.php';

$pages = array(
	'index.php' => 'Tableau de bord',
	'#stats.php' => 'Statistiques',
	'#reports.php' => 'Rapports',
	'articles.php' => 'Articles JDC',
	'users.php' => 'Utilisateurs',
	'#comments.php' => 'Commentaires',
	'#messages.php' => 'Messages',
);

define('USER_ROLE_DEFAULT', 0);
define('USER_ROLE_WRITER', 1);
define('USER_ROLE_ADMIN', 2);