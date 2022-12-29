<?php
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'ngerrets' );

/** Database password */
define( 'DB_PASSWORD', '1234567890' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** generate key here: https://api.wordpress.org/secret-key/1.1/salt/ */
define('AUTH_KEY',         ')<XI!(If@)3ZkU[ c<4}H{cJ9cLF>{+?x:K|[y5{m@K~+9] ]UM9j`LE|,K<bY4N');
define('SECURE_AUTH_KEY',  '_+&Q$N/auN6vzmnnQa7Tk.:BZ0gHx.za(6y>z_Cie6arZX$|Kd~8t3jU#0&fE@ge');
define('LOGGED_IN_KEY',    '{<iTNkxX>5iej-US+Jj];)y]CHCQKB@+7+Rr0,sNs5^,0@FHePA#$7u#_#L0 q|8');
define('NONCE_KEY',        '/2!@ F6@+3DFp:![j^NyX/N*B$^gPuP{+K.:vA+h}@f5CFutLe%<4k^d8*zZqBI ');
define('AUTH_SALT',        '.-QO)N?;$1&]p/`((c#tUy@4|3(;=|JZgg>/XGX-]RBtjS!VTs+d)^;rUX]Od*s-');
define('SECURE_AUTH_SALT', '&MirI~0nE%o4rjkR[&LYRpg_;4^OOG>6QF)-lEC8UZq6,>_{PgGr 49#X@ml-0^)');
define('LOGGED_IN_SALT',   ']c-hP^(l=/Dk<2m8]{QA,qdqlKDHvwdi*NqL{>|+Gv)hbB;`|O{<$2M+39:)y8~9');
define('NONCE_SALT',       'mixX/6&;|T8V#YSa89.,D+oP]^/XwRcd,P]l,lI--5vQQIJaOW$_t+c;(ktlv793');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
