<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'O*p a.X}jIFbQ]?K[:)%,n]=[EIf3(ae;Vf3`{y#z7%eNn$FB)ZR/=N$P8(eMMEb' );
define( 'SECURE_AUTH_KEY',  'RXo=bn;5rO+5Qjb8<?`~ kb?RVDLqUzX75_Ny^h|/bI=X?VDVe7K3cBE>aTff.PF' );
define( 'LOGGED_IN_KEY',    'UX=H:&Z%w p@:U:IxhwS>Rr}xR^6ntl%zfq`X1<d8.2PR%[U WD?6Gl|DLODpFKu' );
define( 'NONCE_KEY',        '{]M}<)U:bE9hJrD$Cu#`$&}Yl=HS_CZ~YV9%_=Mj96zy#i>$[iUC6<ud5.1#)YTe' );
define( 'AUTH_SALT',        'JyJ;Ng[ 3zpmk)+2U^GQZHUn7Z1$G?/Ub9J%n`#8BGcx3*=X[lo>)#qZLTSX/cHG' );
define( 'SECURE_AUTH_SALT', 'MpG6>B6:PqXlv@Pscn%2pI4{azyqTKIyYi_kKwg[^q*}z7+}fk)$<V+;%B>g9:lo' );
define( 'LOGGED_IN_SALT',   'jG|@$J_ZL thC>Hh3GQ.r{2*w3Xre~Egjetm4!KGyBiU3[8E6-+d~n? G1KS;x}9' );
define( 'NONCE_SALT',       'gwF:A60x%<F^G)mLQovG[%sGsfA)[N17}-Wh`-u6y$W1P`tREWjtaQEZx>{.zU=b' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
