<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress_db' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vt0,~W6&?dgD(-$_u9BA6<*ljJ]MnBBMRf~n!jHG[cVCEK1M}SPXQM0`1&.j#~((' );
define( 'SECURE_AUTH_KEY',  ';stBYC2IgZ:4yP9WSMAWKM6=CP|Qg-5b7bbP$mGh*>{RkYd9D|).gDW $d@rx_pR' );
define( 'LOGGED_IN_KEY',    '|KR6O6S}JY<$*z{qT]y3,-Vgh <q@E=X~ep:%^OKh`|{e{cM4@*W|d,y*OKwE9O6' );
define( 'NONCE_KEY',        'ts*$*h}I]ss2iIy:7Kg|<y<<jBV<JDaA@r#ZCw84pOW#5fv lfR~g*#E-Hbi)),|' );
define( 'AUTH_SALT',        'S:,D]aV44*mqs{m1Rzz,% 9;^XKTqS,Hc,YY+6&SclIj)*O=7X7D&tVdS~ha>Y`X' );
define( 'SECURE_AUTH_SALT', '|![08&WS/Xpa%WctH8PpRmmlWIR:L)K:}O=&j5c~!te~r>{B>P82lo$MS,H-/bN;' );
define( 'LOGGED_IN_SALT',   ')6Y!Ogjt:w`0o~{Z&3B ~},3?&rx%C{8Wm{*yBp}!ZHx>2nV+4={-=tlG.6GM7k|' );
define( 'NONCE_SALT',       ']i.[)n6:v{RG)s%LK^4FD%$5| PYKguaojC<bf8qHe|a9/hAFWK=N~R/#u-|,ie)' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
