<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'wordpress_db');

/** Nome utente del database MySQL */
define('DB_USER', 'steve');

/** Password del database MySQL */
define('DB_PASSWORD', 'mydbpass');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`NxS-[5-J,`oXFss=]`f^}Q;{Jog&x4e#JJ|&l~3<WVS!mGo$YYbJ+0ehyCEeJd}');
define('SECURE_AUTH_KEY',  'IZ__$xc5p};PZ|&42lUceGzj0k-cE[-o&E1|CBwj_xs&+poG,F*%{F_li:;~A+3W');
define('LOGGED_IN_KEY',    'Z0vp|#g3pxhEJ5[d9JIB~L&7O>(Z|NLjg/D;<RNpH13G!9helLGN?{LNN[F(2e[e');
define('NONCE_KEY',        'nP+<!uM2*BFwV8KG9c[69kMEtf$25;;a}/Xr]GNJ9+kl19A4jE-h=SeJqrtJ]~FN');
define('AUTH_SALT',        'dr~jIMhi6fkIm&7|}]Gh1Q!E:@.@UbWIm8Cu U_~|.de>#IUPpHB6F[X3Q+w`xHV');
define('SECURE_AUTH_SALT', 'pGXGvxZ64#IdP{@jfj}{W#NtZ/PyrB#Ply9BIY@^^P1Y,4aRa(UwsH9f+4Z3Hn`D');
define('LOGGED_IN_SALT',   'km4b5sq7XiO:M:JTkP} Y&@5oZtTMQ5lRhI$8ZV 5l=7#C?oQTC4{1s~A*]/P3Mm');
define('NONCE_SALT',       'FsqM/jv.m(DLY[)[[JTX+]EYm2+zSxtg1=V$B+u]DDw?Vr?Fyl/+S]i`_]3.61sP');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_project';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');