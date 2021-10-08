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
define( 'DB_NAME', 'vex' );

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
define( 'AUTH_KEY',         'jw-(Dnl^er C1dAlbb&W<g#=$ii@0stf[](Pss@gK>;4C(ubMSafQJB$Z!i9x@%q' );
define( 'SECURE_AUTH_KEY',  'pNsPs=Iw%uqI1e)B+B;pujK/zeF^BtaI kWj@f$>?whAU%S$DaJy2c,@]$Z--=]e' );
define( 'LOGGED_IN_KEY',    'l]-Pwq;<R%ZHb|>aMz7WK2Lgf(OYy`C4?0){DU7d<na NH^E4>jsYfh+4|g@HI;$' );
define( 'NONCE_KEY',        'jXH!Dyje*d5X=+JlRNfo?iyz!$DC<VXGU!:0<=vVSA9Vsp(>03+5EQ&o/tN]TUtE' );
define( 'AUTH_SALT',        '4O9[v7hNgVWhKngXT(uQUIHKqxT2s?n #HILtW`u&ig)A*~Cl@PS2c@{Od)dvy.p' );
define( 'SECURE_AUTH_SALT', 'B5ql3D`HRnIHVG.%owEEI`qaQ-{{3b;I~XVH7h9iR&AJVd}3Q+}3^r_]fleNCDX?' );
define( 'LOGGED_IN_SALT',   '51KNht2zW04wL{s5=-K5}.eS+`6NyvYJ69IUew8I*lJvTCaRJjg &puWdxw0*YW]' );
define( 'NONCE_SALT',       'fvn2$D+]*bv6}Q0=CbksVaF.<Bp-hQ$ohQ`0[68V/>yXGVHy(gm{n+F6X3>+A@+@' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
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
