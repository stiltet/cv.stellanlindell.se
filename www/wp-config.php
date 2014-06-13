<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil innehåller följande konfigurationer: Inställningar för MySQL,
 * Tabellprefix, Säkerhetsnycklar, WordPress-språk, och ABSPATH.
 * Mer information på {@link http://codex.wordpress.org/Editing_wp-config.php
 * Editing wp-config.php}. MySQL-uppgifter får du från ditt webbhotell.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * @package WordPress
 */

if ( file_exists( 'maintenance.php' ) ) {
    require_once( 'maintenance.php' );
    die();
}

define("WP_HOME","http://".$_SERVER['HTTP_HOST']);
define("WP_SITEURL","http://".$_SERVER['HTTP_HOST']);

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
if(strpos($_SERVER['HTTP_HOST'],".dev") !== false or strpos($_SERVER['HTTP_HOST'],"192.168") !== false or strpos($_SERVER['HTTP_HOST'],"localhost") !== false) {
    /** Namnet på databasen du vill använda för WordPress */
    define('DB_NAME', 'cv');

    /** MySQL-databasens användarnamn */
    define('DB_USER', 'cv');

    /** MySQL-databasens lösenord */
    define('DB_PASSWORD', 'EPpBqG8YExF2NCGA');

    /** MySQL-server */
    define('DB_HOST', 'localhost');

    /**
     * För utvecklare: WordPress felsökningsläge.
     *
     * Ändra detta till true för att aktivera meddelanden under utveckling.
     * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG
     * i sin utvecklingsmiljö.
     */
    define('WP_DEBUG', TRUE);
}
else {
    /** Samma inställningar som ovan, fast för live-miljön */
    define('DB_NAME', '');
    define('DB_USER', '');
    define('DB_PASSWORD', '');
    define('DB_HOST', '');
    define('WP_DEBUG', FALSE);
}

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8');

/** Kollationeringstyp för databasen. Ändra inte om du är os�ker. */
define('DB_COLLATE', 'utf8_swedish_ci');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#EKs|g.a_zE~zbXKx:=$Vy/sf|0}XI?HV!D1e^GVZ%hs!,^te`QW2I_,Y7E&FFq&');
define('SECURE_AUTH_KEY',  '}3((3brucX]u3t|4k}+XA/Ve97hFVo9?liL375Io,}8-8C,liv4uj]Z]?O! FoHD');
define('LOGGED_IN_KEY',    'J]|N$iH[=m$nwjp%(jG+_gB<E;&$/b%)bzg+.r.X]Nf~#Fv^4@53Xwi<qBCxaaz+');
define('NONCE_KEY',        'n5[z!8H|TwTm*#c.7e|-:m*?-Fy)0jg5AhrPX@|~Di+Vz%Qf<VL2.M*b$EVx+#_u');
define('AUTH_SALT',        ')jemjM^I?=tyhb95;a[U`+dhS1u3._r`rzF8B=w1+8p7rMaxX1@~cg-hY?12yj)+');
define('SECURE_AUTH_SALT', '~+K|S{}pKP^#cr:HjHFdAM1$Y|aYNv+^rz>-EuT]gE5;e0.-+$]e0-&*`?u.zXWU');
define('LOGGED_IN_SALT',   'bE`q>NRYc6{8uVE{`529dd  X/-,qLj-=}J{k$t]*w_K&osRP1*=h_lo|G`IL/ax');
define('NONCE_SALT',       '%#e=p}h>JD&Rk{>9Beu/v)LozQ=w@x72DKnldLKwj]QQ-.DeHNZTa1Qmp}2dL)S$');

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'slcv_';

/**
 * WordPress-språk, förinställt för svenska.
 *
 * Du kan ändra detta för att ändra språk för WordPress.  En motsvarande .mo-fil
 * för det valda språket måste finnas i wp-content/languages. Exempel, lägg till
 * sv_SE.mo i wp-content/languages och ange WPLANG till 'sv_SE' för att få sidan
 * på svenska.
 */
define('WPLANG', 'sv_SE');

/** Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');
