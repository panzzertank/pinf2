<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=<t3{oD>l[V%`mF*HgwSR}#5|%&XV--#5wlw2` k!H<g`KjQyk,vq^a$i6dGUD8t');
define('SECURE_AUTH_KEY',  'aO/]8A.Hy4oVb&I+m]zx,U#}P1kE<%6fw3e#Po6>dTbWPIcpdrs6OFvEp;v<`xlc');
define('LOGGED_IN_KEY',    '!5]4!T>DZ<t-FFPT189?=J:,IQBM@aKK7w+RG:^XD/&%> uIOe@gYN#ZJ72u!dWR');
define('NONCE_KEY',        'QWYsRFB.Z}ubXJM5?eHplXxhNh||KN?a3HU(Dt3]&^?@(,c%goD]K9f@(mh51HP=');
define('AUTH_SALT',        'fzC@~J2~vz[}i>5$.{yBpA@188SO&DBNmGKibtD1VAind5u~/D@S7%1?efg?/SL ');
define('SECURE_AUTH_SALT', '/i]wn.Gu}Q#bA<~~@ Hq3o</~t~o.&G(9;yPX9;GH2#H=5qSb#|b2LN(:F)OIjmT');
define('LOGGED_IN_SALT',   '?)cLg$.S$jI~HGQ_g>a+e`.9(,31m+Vm]=5u)xg#1Beg`h,ILBlxwFEXr6lt1~|[');
define('NONCE_SALT',       '.jL,,}r5S_iVP|~E*,;97/^^,4Vd3KNGfLDKpmMG%n tGAkB&pb8oPTlT_(jRA$t');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');