<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'DBdannatours');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'DBdannatours');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'D4nna#tours');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'DBdannatours.db.8531023.hostedresource.com');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'W.C2o=kvE{z-|Xyj+ZeHqOgz-#g]hmvMNz!pl0:Vhzt:1*wpJ,@#^sp+k;k`$_q*');
define('SECURE_AUTH_KEY',  'b2F@u%On;6f),BJGrZ--f(zzb)^I+q>qQ,2UiM(C(])*X]x/1KU@7Uxn7n=3h#}C');
define('LOGGED_IN_KEY',    '@6n(R}/&?5Ux{y+t8hhZwE4Gq&*~U>xo0LKp*fgt,eNB[+8NC.Rhz+*XP; g#+|1');
define('NONCE_KEY',        'Hh+BL7imj28:6YIBt;5qf<c7B;}&Q(_C6Ld+MklG:kUQ=cMfeC-RSQR63s+U.~l?');
define('AUTH_SALT',        '?{)zS$$,O`cp-2I~2@vHlZAZEV$S{&kZnd<}:#c!?G,w)c-f_Ok1jy.#NEQJ<Et<');
define('SECURE_AUTH_SALT', 'yFUEwoQKKB(md^18uJW@cs?pV|86I|mM~*>1(<L=~9|rEO1EszH*8nlug_(us)Ej');
define('LOGGED_IN_SALT',   ')x-qY+WtFIB)-fgQ:C#7_ap 4sEeyWQ$>WGKDI|n?%`YtU+vb,43Ut<?rXA^ZBj?');
define('NONCE_SALT',       '!K%<+vI^AFl^rdu3[;Ll{x5]xUl@O~R,&$*M>=q-#t2xVD|6J^m+O-O@a5&UlOd|');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'znjjh_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

