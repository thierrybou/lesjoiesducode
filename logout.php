<?php
require_once 'inc/config.php';

// Détruit toutes les variables de session (vide le tableau $_SESSION)
session_unset($_SESSION);

// Détruit la session côté serveur (supprime le fichier /tmp/sess_XXXXXX)
session_destroy();

// Détruit le cookie client avec l'identifiant de session
setcookie(session_name(), false, 1, '/');